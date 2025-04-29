<x-layouts.app :title="__('Janus Helkjær | Digital Designer & Developer')">

    @php
        $blocks = [
            'hero' => [
                'type' => 'hero_section',
                'data' => [
                    'style' => 'default',
                    'title' => 'Janus Helkjær',
                    'subtitle' => 'Digital Designer & Developer',
                    'description' =>
                        'I am a digital designer and developer with a passion for creating beautiful and functional websites.',
                    'image' => asset('images/hero.jpg'),
                ],
            ],
            'services' => [
                'type' => 'services',
                'data' => [
                    'preheader' => 'What I do',
                    'heading' => 'My Services',
                    'subheading' => 'One-person Digital Marketing Agency',
                    'content' => 'I offer a range of services to help you create beautiful and functional websites.',
                ],
            ],
            'attention-seeker' => [
                'type' => 'attention-seeker',
                'data' => [
                    'preheader' => 'Hello, I am Janus Helkjær',
                    'heading' => 'Digital Designer & Developer',
                    'subheading' => 'I create beautiful and functional websites.',
                    'description' =>
                        'I am a digital designer and developer with a passion for creating beautiful and functional websites.',
                    'image' => asset('images/hero.jpg'),
                ],
            ],
            'about' => [
                'type' => 'about',
                'data' => [
                    'heading' => 'About Me',
                    'subheading' => 'Digital Designer & Developer',
                    'description' =>
                        'I am a digital designer and developer with a passion for creating beautiful and functional websites.',
                    'image' => asset('images/about.jpg'),
                    'profile_image' => asset('images/jh-profile-square.png'),
                    'buttons' => [
                        [
                            'label' => 'View my work',
                            'url' => '#',
                            'variant' => 'primary',
                        ],
                        [
                            'label' => 'Contact me',
                            'url' => '#',
                            'variant' => 'ghost',
                        ],
                    ],
                ],
            ],

            'projects' => [
                'type' => 'projects',
                'data' => [
                    'heading' => 'My Projects',
                    'subheading' => 'Digital Designer & Developer',
                    'description' =>
                        'I am a digital designer and developer with a passion for creating beautiful and functional websites.',
                    'projects' => [
                        [
                            'title' => 'Project 1',
                            'description' => 'This is a description of project 1.',
                            'image' => asset('images/project1.jpg'),
                        ],
                        [
                            'title' => 'Project 2',
                            'description' => 'This is a description of project 2.',
                            'image' => asset('images/project2.jpg'),
                        ],
                    ],
                ],
            ],
            'social-proof' => [
                'type' => 'social-proof',
                'data' => [],
            ],
        ];
    @endphp


    @foreach ($blocks as $key => $blockComponent)
        <div class="py-1 w-full">
            <x-dynamic-component :component="'blocks.' . $blockComponent['type']" :info="$blockComponent" />
        </div>
    @endforeach




</x-layouts.app>
