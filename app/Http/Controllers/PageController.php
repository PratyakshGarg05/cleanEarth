<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| PageController
|--------------------------------------------------------------------------
| Handles all informational pages of the CleanEarth project:
| Home, About, Solutions, Awareness.
|--------------------------------------------------------------------------
*/

class PageController extends Controller
{
    /**
     * Display the Home page.
     */
    public function home()
    {
        $stats = [
            ['value' => '2.1B',  'label' => 'Tons of Waste / Year'],
            ['value' => '91%',   'label' => 'Plastic Not Recycled'],
            ['value' => '3×',    'label' => 'Waste Growth by 2050'],
        ];

        $pillars = [
            [
                'icon'  => '🗂️',
                'title' => 'Waste Segregation',
                'desc'  => 'Sorting waste at source into organic, recyclable, hazardous, and non-recyclable categories to enable proper treatment and reduce landfill burden.',
            ],
            [
                'icon'  => '♻️',
                'title' => 'Responsible Disposal',
                'desc'  => 'Implementing safe, environment-friendly disposal methods including composting, recycling centers, incineration with filtration, and controlled landfill systems.',
            ],
            [
                'icon'  => '🚿',
                'title' => 'Improved Sanitation',
                'desc'  => 'Upgrading sanitation infrastructure, promoting hygiene practices, and establishing waste collection systems that prevent disease and contamination.',
            ],
        ];

        $threats = [
            [
                'icon'  => '🏥',
                'title' => 'Health Impact',
                'desc'  => 'Over 400,000 deaths annually are linked to improper waste disposal and poor sanitation conditions worldwide.',
            ],
            [
                'icon'  => '🌊',
                'title' => 'Water Pollution',
                'desc'  => 'Leachate from unmanaged landfills contaminates groundwater, affecting drinking water for millions of people.',
            ],
            [
                'icon'  => '🌡️',
                'title' => 'Climate Crisis',
                'desc'  => 'Landfills are the third-largest source of methane — a greenhouse gas 25× more potent than CO₂.',
            ],
        ];

        return view('pages.home', compact('stats', 'pillars', 'threats'));
    }

    /**
     * Display the About page.
     */
    public function about()
    {
        $pillars = [
            ['icon' => '🗑️', 'title' => 'Waste Segregation at Source',         'desc' => 'Households and businesses categorize waste into organic, dry, wet, and hazardous streams before collection.'],
            ['icon' => '🏭', 'title' => 'Treatment & Disposal Infrastructure', 'desc' => 'Municipal systems for composting plants, recycling facilities, sanitary landfills, and wastewater treatment.'],
            ['icon' => '📚', 'title' => 'Public Education & Awareness',        'desc' => 'Community campaigns and school programs to build long-term behavioral change around waste habits.'],
            ['icon' => '⚖️', 'title' => 'Policy & Enforcement',               'desc' => 'Government regulations, incentives, and penalties that drive institutional compliance with waste standards.'],
        ];

        $stats = [
            ['icon' => '📊', 'title' => 'Global Waste Generation', 'desc' => 'The world generates over 2.1 billion tonnes of municipal solid waste every year. Only 16% is currently recycled or composted.'],
            ['icon' => '💧', 'title' => 'Sanitation Gap',          'desc' => 'Nearly 2 billion people globally lack access to safe, managed sanitation, exposing them to preventable waterborne diseases.'],
            ['icon' => '🌿', 'title' => 'Organic Waste Potential', 'desc' => 'Over 50% of all waste is organic and biodegradable — composting alone could halve landfill volumes if properly implemented.'],
            ['icon' => '💰', 'title' => 'Economic Opportunity',    'desc' => 'The circular economy driven by proper waste management could generate $4.5 trillion in global economic benefits by 2030.'],
        ];

        return view('pages.about', compact('pillars', 'stats'));
    }

    /**
     * Display the Solutions page.
     */
    public function solutions()
    {
        $tabs = [
            [
                'id'    => 'segregation',
                'label' => '🗂️ Waste Segregation',
                'title' => 'Waste Segregation at Source',
                'intro' => [
                    'Segregation is the foundational step of any effective waste management system. When waste is sorted at the point of generation — households, markets, schools — downstream recycling and treatment become dramatically more efficient.',
                    'A color-coded bin system is the simplest and most universally recognized approach to community-level segregation.',
                ],
                'steps' => [
                    ['num' => 1, 'title' => 'Green Bin — Organic / Wet Waste',      'desc' => 'Food scraps, vegetable peels, garden waste, coffee grounds. Used for composting.'],
                    ['num' => 2, 'title' => 'Blue Bin — Dry / Recyclable Waste',    'desc' => 'Paper, cardboard, glass, plastics, metals. Sent to recycling facilities.'],
                    ['num' => 3, 'title' => 'Red Bin — Hazardous Waste',             'desc' => 'Batteries, chemicals, medical waste, e-waste. Requires special handling.'],
                    ['num' => 4, 'title' => 'Black Bin — Non-recyclable Residual',  'desc' => 'Soiled packaging, diapers, mixed-material items. Goes to engineered landfill.'],
                ],
                'facts_title' => '📌 Key Benefits of Segregation',
                'facts' => [
                    ['title' => '↑ Recycling Rate',   'desc' => 'Source segregation can increase a municipality\'s recycling rate by up to 40%, reducing landfill pressure significantly.'],
                    ['title' => '💰 Cost Savings',    'desc' => 'Sorted waste reduces processing costs at facilities by 30–50% because contamination is minimized.'],
                    ['title' => '🌱 Compost Output',  'desc' => 'Organic streams convert to high-quality compost, reducing the need for synthetic fertilizers in agriculture.'],
                    ['title' => '⚠️ Worker Safety',   'desc' => 'Isolating hazardous waste protects waste workers and communities from toxic exposure and injury.'],
                ],
            ],
            [
                'id'    => 'disposal',
                'label' => '♻️ Disposal Methods',
                'title' => 'Responsible Disposal Methods',
                'intro' => [
                    'Once collected and segregated, waste must be treated through methods that minimize environmental and health harm. Modern disposal follows a hierarchy — prioritizing reduction, reuse, recycling, then recovery, and finally safe landfill.',
                ],
                'steps' => [
                    ['num' => 1, 'title' => 'Composting',              'desc' => 'Biological decomposition of organic waste into nutrient-rich compost for agriculture and gardens.'],
                    ['num' => 2, 'title' => 'Mechanical Recycling',    'desc' => 'Processing plastics, metals, glass, and paper into raw materials for manufacturing new products.'],
                    ['num' => 3, 'title' => 'Waste-to-Energy (WtE)',   'desc' => 'Controlled incineration of non-recyclable waste to generate electricity or heat with emission controls.'],
                    ['num' => 4, 'title' => 'Sanitary Landfill',       'desc' => 'Engineered landfills with liners, leachate collection, and gas capture systems minimize contamination.'],
                ],
                'facts_title' => '🔄 The Waste Hierarchy',
                'facts' => [
                    ['title' => '1st — Reduce',          'desc' => 'The best waste is waste that is never created. Policies promoting minimal packaging and product durability.'],
                    ['title' => '2nd — Reuse',           'desc' => 'Repair, donate, or repurpose items to extend their useful life before disposal.'],
                    ['title' => '3rd — Recycle',         'desc' => 'Convert materials back into raw inputs for new products — closes the loop on resource use.'],
                    ['title' => '4th — Recover Energy',  'desc' => 'Extract value from non-recyclable waste through biogas capture or thermal treatment.'],
                    ['title' => '5th — Dispose Safely',  'desc' => 'Only the irreducible remainder goes to landfill, managed to prevent groundwater and air contamination.'],
                ],
            ],
            [
                'id'    => 'sanitation',
                'label' => '🚿 Sanitation Systems',
                'title' => 'Improved Sanitation Systems',
                'intro' => [
                    'Sanitation encompasses safe management of human excreta, liquid waste, and wastewater. Improving sanitation requires both physical infrastructure and long-term behavioral change within communities.',
                ],
                'steps' => [
                    ['num' => 1, 'title' => 'Access to Clean Toilets',       'desc' => 'Building and maintaining toilet facilities in homes, schools, and public spaces for universal access.'],
                    ['num' => 2, 'title' => 'Sewage Treatment Plants',       'desc' => 'Treating wastewater before discharge to remove pathogens, nutrients, and chemicals from water bodies.'],
                    ['num' => 3, 'title' => 'Solid Waste Collection Network','desc' => 'Regular, reliable municipal collection services that prevent open dumping and burning in communities.'],
                    ['num' => 4, 'title' => 'Hygiene Education Programs',    'desc' => 'Community training on handwashing, food safety, and personal hygiene to break disease transmission chains.'],
                ],
                'facts_title' => '🏥 Health Benefits',
                'facts' => [
                    ['title' => 'Disease Prevention',    'desc' => 'Improved sanitation reduces diarrheal disease incidence by up to 37%, saving hundreds of thousands of lives annually.'],
                    ['title' => 'Economic Returns',      'desc' => 'Every $1 invested in sanitation returns $5.50 in economic value through reduced illness and improved productivity.'],
                    ['title' => 'Water Quality',         'desc' => 'Proper sewage treatment prevents pathogen contamination in rivers, lakes, and coastal water bodies.'],
                    ['title' => "Women's Dignity",       'desc' => 'Access to private, safe facilities is critical for the safety, health, and dignity of women and girls globally.'],
                ],
            ],
        ];

        return view('pages.solutions', compact('tabs'));
    }

    /**
     * Display the Awareness page.
     */
    public function awareness()
    {
        $timeline = [
            ['side' => 'left',  'icon' => '🏠', 'title' => 'Set Up Home Segregation',   'desc' => 'Place separate bins for organic, dry recyclable, and residual waste. Label them and make it a daily family habit.'],
            ['side' => 'right', 'icon' => '📦', 'title' => 'Reduce Packaging Waste',    'desc' => 'Choose minimal packaging, bring reusable bags, and buy in bulk to reduce waste at source.'],
            ['side' => 'left',  'icon' => '🌱', 'title' => 'Start Composting',          'desc' => 'Convert food scraps and garden waste into compost. This diverts up to 30% of household waste from landfill.'],
            ['side' => 'right', 'icon' => '🏘️', 'title' => 'Engage Your Community',    'desc' => 'Organize neighborhood clean-ups, petition for more collection points, and share recycling information.'],
            ['side' => 'left',  'icon' => '📢', 'title' => 'Advocate for Better Policy','desc' => 'Support representatives who prioritize waste management. Write to officials and participate in public consultations.'],
        ];

        $tips = [
            ['icon' => '🧴', 'title' => 'Avoid Single-Use Plastics', 'desc' => 'Carry a reusable bottle, coffee cup, and shopping bag. Refusing single-use items is the fastest way to reduce your plastic footprint.'],
            ['icon' => '🍂', 'title' => 'Compost Organic Waste',     'desc' => 'Food waste and garden clippings become rich compost in 6–8 weeks. Enrich your garden soil and reduce chemical fertilizer use.'],
            ['icon' => '💧', 'title' => 'Conserve Water',            'desc' => 'Fix leaks, use shorter showers, and install water-efficient fixtures to reduce wastewater generation.'],
            ['icon' => '🔋', 'title' => 'Dispose E-Waste Properly',  'desc' => 'Never put batteries or electronics in regular bins. Find certified e-waste collection points in your city.'],
            ['icon' => '🧹', 'title' => 'Join Community Clean-Ups',  'desc' => 'Join or organize clean-up drives in parks, rivers, and streets. A monthly 2-hour effort visibly transforms neighborhoods.'],
            ['icon' => '📖', 'title' => 'Educate Others',            'desc' => 'Share knowledge with family and classmates. Behavioral change spreads through social networks — be the conversation starter.'],
        ];

        return view('pages.awareness', compact('timeline', 'tips'));
    }
}
