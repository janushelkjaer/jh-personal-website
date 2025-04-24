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
                new StringSchema('intro', 'The intro of the post'),
                new StringSchema('what_you_will_learn', 'Key learnings of the post'),
                new StringSchema('category', 'The category of the post'),
                new StringSchema('audience', 'The audience of the post'),
                new StringSchema('difficulty', 'The difficulty of the post'),
                new StringSchema('length', 'The length of the post'),
                new ArraySchema(
                    name: 'main_content',
                    description: 'The main content of the post',
                    items: new ObjectSchema(
                        name: 'section',
                        description: 'A detailed section of the post',
                        properties: [
                            new StringSchema('title', 'The title of the section'),
                            new StringSchema('content', 'Section content'),
                            new ArraySchema(
                                name: 'subsections',
                                description: 'Subsections of the section',
                                items: new ObjectSchema(
                                    name: 'subsection',
                                    description: 'A subsection of the section',
                                    properties: [
                                        new StringSchema('title', 'The title of the subsection'),
                                        new StringSchema('content', 'Subsection content'),
                                        new StringSchema('imagery_suggestion', 'Imagery suggestion'),
                                        new StringSchema('examples', 'Examples'),
                                    ],
                                    requiredFields: ['title', 'content'],
                                )
                            ),
                        ],
                        requiredFields: ['title', 'content'],
                    )
                ),

                new ArraySchema(
                    name: 'key_takeaways',
                    description: 'The key takeaways of the post',
                    items: new ObjectSchema(
                        name: 'key_takeaway',
                        description: 'A key takeaway',
                        properties: [
                            new StringSchema('title', 'The title of the key takeaway'),
                            new StringSchema('content', 'Key takeaway content'),
                        ],
                        requiredFields: ['title', 'content'],
                    )
                ),

                new StringSchema('summary', 'The summary of the post'),

            ],
            requiredFields: ['title']
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

        dd($response);

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
