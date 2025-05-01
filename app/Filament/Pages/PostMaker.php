<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Prism\Prism\Prism;
use Livewire\Attributes\Session;
use Prism\Prism\Enums\Provider;
use Prism\Prism\Schema\ObjectSchema;
use Prism\Prism\Schema\StringSchema;
use Prism\Prism\Schema\ArraySchema;
use Prism\Prism\Schema\NumberSchema;
use App\Models\Post;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
class PostMaker extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.post-maker';
    

    public $response;
    public $prompt;

    // important pre-requisite for the session
    public $audience = 'A semi or non-technical 25 year old marketing manager or product manager. 
            The post should be easily readable and understandable by a non-technical 25 year old. 
            The post should be structured in a way that is easy to follow and understand. 
            The post should be at least 2000 words long. The post should be divided into sections and subsections. 
            The post should include key takeaways and a summary at the end. The post should include imagery suggestions and examples where appropriate.';

    public $difficulty = 'Beginner';
    public $length;
    public $category;
    public $sender = 'Janus Helkjær, a solo founder and entrepreneur. Digital designer, developer & markeeter.';

    public $writingStyle = 'The post should be written in a friendly and approachable tone. Cut down on the fluff and stick to the point.';

    public function mount()
    {
        
    }

    public function generatePost()
    {

        $schema = new ObjectSchema(
            name: 'post',
            description: 'A blog post.',
            properties: [
                new StringSchema('title', 'The title of the post'),
                new StringSchema('slug', 'The slug of the post'),
                new StringSchema('intro', 'The intro of the post'),
                new StringSchema('excerpt', 'The excerpt of the post'),
                new ArraySchema(
                    name: 'what_you_will_learn',
                    description: 'Key learnings of the post',
                    items: new ObjectSchema(
                        name: 'key_learning',
                        description: 'A key learning',
                        properties: [
                            new StringSchema('heading', 'The heading of the key learning'),
                            new StringSchema('text', 'The content of the key learning in one sentence.'),
                        ],
                        requiredFields: ['heading', 'text'],
                    )
                ),
                new StringSchema('category', 'The category of the post'),
                new StringSchema('audience', 'The audience of the post'),
                new StringSchema('difficulty', 'The difficulty of the post'),
                new StringSchema('length', 'The length of the post'),
                new StringSchema('main_content', 'The main content of the post, written in markdown.'),
                new ArraySchema(
                    name: 'key_takeaways',
                    description: 'The key takeaways of the post',
                    items: new ObjectSchema(
                        name: 'key_takeaway',
                        description: 'A key takeaway',
                        properties: [
                            new StringSchema('heading', 'The heading of the key takeaway'),
                            new StringSchema('text', 'Key takeaway content'),
                        ],
                        requiredFields: ['heading', 'text'],
                    )
                ),

                new StringSchema('summary', 'The summary of the post'),

                new StringSchema('imagery_suggestions', 'Imagery suggestions for the post'),

                new StringSchema('references', 'References used in the post, written in markdown.'),

            ],
            requiredFields: ['title', 'slug', 'intro', 'excerpt', 'category', 'audience', 'difficulty', 'length', 'main_content', 'key_takeaways', 'summary', 'imagery_suggestions', 'references']
        );


        try {
            $response = Prism::structured()
                //->using(Provider::Ollama, 'qwen2.5:14b') // qwen2.5:14b
                ->using(Provider::OpenAI, 'gpt-4o-mini')
                ->withSchema($schema)
                #->withMaxSteps(4)
                ->withClientOptions(['timeout' => 3000])
                ->withPrompt('Create a blog post based on the subject of ' . $this->prompt . '. ')
                ->generate();

            #dd($response);
        } catch (\Throwable $th) {
            throw $th;
        }

       # dd($response);

       $structured = $response->structured;

       #dd($structured);

        $category = Category::firstOrCreate(['title' => $structured['category'], 'slug' => Str::slug($structured['category'])]);

        $randomDateTime = Carbon::now()->subSeconds(rand(0, 365 * 24 * 60 * 60));

        // '[{"type":"markdown_editor","data":{"content":"' . $structured['main_content'] . '"}}]'
        $post = Post::create([
            'title' => $structured['title'],
            'slug' => $structured['slug'],
            'intro' => $structured['intro'],
            'excerpt' => $structured['excerpt'],
            'content' => [
                [
                    'type' => 'markdown_editor',
                    'data' => [
                        'content' => $structured['main_content']
                    ]
                ]
            ],
            'summary' => $structured['summary'],
            'imagery_suggestions' => $structured['imagery_suggestions'],
            'references' => $structured['references'],
            'key_takeaways' => $structured['key_takeaways'],
            'what_you_will_learn' => $structured['what_you_will_learn'],
            //'category_id' => $category->id,
            // 'difficulty' => $this->difficulty,
            // 'length' => $this->length,
            // 'audience' => $this->audience,
            'references' => $structured['references'],
            'published_at' => $randomDateTime,
        ]);

        $post->categories()->attach($category);

        dd($post);

        #$this->response = $response->text;
        #$factCategory = $response->structured;

        #dd($factCategory);

        // foreach ($factCategory['facts'] as $key => $value) {
        //     Fact::create([
        //         'title' => $value['title'],
        //         'source' => $value['source'],
        //         'content' => $value['content'],
        //         'fact_checked_at' => now(),
        //         'category_id' => $this->category,
        //         'status' => 'published',
        //     ]);
        // }

        // $this->response = $factCategory;
    }
}
