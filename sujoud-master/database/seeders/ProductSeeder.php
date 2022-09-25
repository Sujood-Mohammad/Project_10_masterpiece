<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name' => 'Gardening Hand Gloves',
            'product_description' => 'GARDEN GLOVES FOR MEN - Breathable and comfortable polyester base in red and black to keep your hands cool and dry. No sweaty hands in Spring and Summer. Stretchy seamless knitted work gloves deliver flexibility and dexterity. Long cuff to keep unwanted dirt & debris out. Elastic wrist for easy on and off.',
            'product_image' => '1662810859-Gardening Hand Gloves.webp',
            'product_price' => '11',
            'category_id' => '1',
        ]);
        Product::create([
            'product_name' => 'Shovel',
            'product_description' => 'It is a digging tool where it is used to lift and transport loose materials such as soil, coal, gravel and sand and is used for turning the soil.Shovels are widely used in agriculture and in the construction of public gardens. Most types of shovels are hand tools consisting of a wide blade of steel attached to a medium handle​ length.',
            'product_image' => '1662810800-Flextools Gardening Trowel.webp',
            'product_price' => '100',
            'category_id' => '1',
        ]);

        Product::create([
            'product_name' => 'Watering Jug',
            'product_description' => 'It is one of the agricultural tools that are used in the irrigation process, as it is used to spray the grass and small shrubs because through it the amount of water is controlled according to the water needs of each plant.',
            'product_image' => '1662810529-Gardening Water Spray.webp',
            'product_price' => '100',
            'category_id' => 1,
        ]);
        Product::create([
            'product_name' => 'Tree Scissors',
            'product_description' => 'The most famous and best Felco scissors in the world.
            -Felco 5 Excellent performance - base model.
            -Comfortable and firm grip. Very strong blades for better and easier cutting Insulated handle to prevent slipping and perspiration.
            -Lifetime Warranty.',
            'product_image' => '1664017109-Tree Scissors.jpg',
            'product_price' => '10',
            'category_id' => '1',
        ]);

        Product::create([
            'product_name' => 'Pesticide Spray Pump',
            'product_description' => 'ready material Adjust the nozzle to suit your use.
            -Area or household uses for spraying water.',
            'product_image' => '1664017838-Pesticide Spray Pump.jpg',
            'product_price' => '55',
            'category_id' => '1',
        ]);

        Product::create([
            'product_name' => 'Cultivator',
            'product_description' => 'Seed planting machine It is a machine used to plant seeds in the ground in an automatic way',
            'product_image' => '1662811800-Cultivator.jpg',
            'product_price' => '10000',
            'category_id' => 2,
        ]);
        Product::create([
            'product_name' => 'Harvester',
            'product_description' => 'It is one of the machines that are used in harvesting and collecting crops in an automated manner.',
            'product_image' => '1662812202-Harvester.jpg',
            'product_price' => '150000',
            'category_id' => 2,
        ]);
        Product::create([
            'product_name' => 'Tractor Spraying Pesticides',
            'product_description' => 'It is a heavy machine used to distribute the fertilizer in the agricultural land automatically.',
            'product_image' => '1662812298-Tractor Spraying Pesticides.jpg',
            'product_price' => '200000',
            'category_id' => 2,
        ]);

        Product::create([
            'product_name' => 'Tractor kubota',
            'product_description' => 'It is a high-engine agricultural vehicle that performs some agricultural tasks such as towing trailers, distributing fertilizer and pulling pesticide spraying carts.',
            'product_image' => '1664016074-Tractor kubota.jpg',
            'product_price' => '100000',
            'category_id' => 2,
        ]);

        Product::create([
            'product_name' => 'Weed Grinding Machine',
            'product_description' => 'It grinds trees and herbs at a high speed. It is one of the largest agricultural machines capable of grinding thousands of tons at the same time.	',
            'product_image' => '1664018785-Weed Grinding Machine.jpg',
            'product_price' => '300000',
            'category_id' => 2,
        ]);


        Product::create([
            'product_name' => 'Wild Thyme',
            'product_description' => 'Wild thyme is by far the most widespread and abundant of the thyme species. Walk across a chalk grassland in summer and its fragrance will punctuate the warm air around you - a delightful, sensory experience. Often forming mats low to the ground, it can also be found growing in short-turfed pastures and meadows, and on cliffs, walls and rocky places. A perennial plant, it flowers from June to September.',
            'product_image' => '1664028217-Wild Thyme.jpg',
            'product_price' => '15',
            'category_id' => 3,
        ]);
        Product::create([
            'product_name' => 'Rosemary',
            'product_description' => 'Rosemary is a perennial shrub and usually grows to about 1 metre (3.3 feet) in height, though some plants can reach up to 2 metres (6.6 feet) tall. The linear leaves are about 1 cm (0.4 inch) long and somewhat resemble small curved pine needles. They are dark green and shiny above, with a white underside and curled leaf margins. The small bluish flowers are borne in axillary clusters and are attractive to bees. Rosemary is fairly resistant to most pests and plant diseases, though it is susceptible to certain fungal infections, such as powdery mildew, in humid climates. It is also a common host to spittlebugs. The plants are easily grown from cuttings.',
            'product_image' => '1664028195-Rosemary.jpg',
            'product_price' => '9',
            'category_id' => 3,
        ]);

        Product::create([
            'product_name' => 'Sage',
            'product_description' => 'Sage is a perennial plant that grows about 60 cm (2 feet) tall. The oval leaves are rough or wrinkled and usually downy; the colour ranges from gray-green to whitish green, and some varieties are variegated. The flowers are borne in spikes and feature tubular two-lipped corollas that are attractive to a variety of pollinators, including bees, butterflies, and hummingbirds. The flowers can be purple, pink, white, or red and produce nutlet fruits.',
            'product_image' => '1664028413-Sage.jpg',
            'product_price' => '5',
            'category_id' => 3,
        ]);

        Product::create([
            'product_name' => 'Jacaranda',
            'product_description' => 'The fern-like foliage usually allows diffuse light to pass through, so growing grass under the tree is possible. But, be aware that the tree can have significant surface roots, disturbing sidewalks or nearby structures.1 Jacaranda leaves, and particularly the flowers, can create a lot of litter when they drop. This messy habit makes the tree a poor choice near pools, driveways, and patios because of cleanup maintenance. If the debris isnot swept up quickly, it can rot and result in a slimy, slippery mess.',
            'product_image' => '1664029181-Jacaranda.jpg',
            'product_price' => '34',
            'category_id' => 4,
        ]);
        Product::create([
            'product_name' => 'Acacia Vistula',
            'product_description' => 'Aptly named the Golden Shower Tree, Cassia fistula has impressive blooms that drape from the crown and will sway gently in the breeze. Beyond the dazzling gold colour that the flowers add to the landscape, this sun-loving tree attracts butterflies and birds, enhancing the biodiversity around us. It is the national tree of Thailand and has gained popularity worldwide.',
            'product_image' => '1664029511-Acacia Vistula.jpg',
            'product_price' => '25',
            'category_id' => 4,
        ]);
        Product::create([
            'product_name' => 'Royal Poinciana',
            'product_description' => 'Plant a flame tree in a location where it has enough space to grow. Not only can this variety of tree reach up to 40 feet, but it can also spread between 40 and 70 feet wide. It can be damaging if not planted in the proper area. Keep the plant away from walls, pavement, or anything else it might overtake.  After planting, cover the soil around the tree—leaving some space near the trunk—with a 2-inch layer of mulch.',
            'product_image' => '1664030175-Royal Poinciana.jpg',
            'product_price' => '30',
            'category_id' => 4,
        ]);
        Product::create([
            'product_name' => 'Cypress Tree',
            'product_description' => 'Cypress, due to its symmetrical shape and soft feathery feel, is one of the most preferred evergreen trees in the United States. It is drought tolerant and grows to about 3 - 4 feet per year. Cypress is easy to prune and shows great adaptability. Cypress is mostly used in Create a vegetated hedge for privacy, as a border around the property, and for better growth and development, plant cypress 6 feet between the two trees',
            'product_image' => '1664029773-Cypress Tree.webp',
            'product_price' => '12',
            'category_id' => 4,
        ]);
        Product::create([
            'product_name' => 'Pine Tree',
            'product_description' => 'Pine trees are also evergreen trees, there are about 115 species of pine trees, and the growth rate of these trees averages 3 - 4 feet per year, and although these evergreen trees are fast-growing and drought-resistant, they may either be able to Tolerant or intolerant of frost, most hobbyists prefer to grow pine trees as ornamentals "mainly because of their needle-shaped leaves", while others plant pine trees to provide shade.',
            'product_image' => '1664029994-Pine Tree.jpg',
            'product_price' => '10',
            'category_id' => 4,
        ]);


        Product::create([
            'product_name' => 'Red Rose Apple',
            'product_description' => 'Rose Apple is a South East Asian fruit indigenous to Malaysia, Indonesia and the Indian subcontinent. It is known by various other names as water apple, Jamaican apple, wax jambu and bell fruit. It is a bell shaped fruit that might be red, yellow or green in color. It shows resemblance to guava and not rose or apple as the name suggests. Ripened rose apple is crisp from outside with sweet and slightly bitter flavor. It has its distinct flavor, fragrance and texture different from guava or apple.',
            'product_image' => '1664023081-Red Rose Apple.jpg',
            'product_price' => '10',
            'category_id' => 5,
        ]);
        Product::create([
            'product_name' => 'Papaya',
            'product_description' => 'Papayas grow in tropical climates and are also known as papaws or pawpaws. Their sweet taste, vibrant color, and the wide variety of health benefits they provide make them a popular fruit.  The papaya, a previously exotic and rare fruit, is now available at most times of the year.',
            'product_image' => '1664023242-Papaya.jpg',
            'product_price' => '20',
            'category_id' => 5,
        ]);

        Product::create([
            'product_name' => 'jackfruit',
            'product_description' => 'Jackfruit also contains vitamins, minerals, and phytochemicals that have health benefits. It’s a good source of:  Vitamin C. Pyridoxine (vitamin B6). Niacin (vitamin B3). Riboflavin (vitamin B2). Folic acid (vitamin B9). Calcium.',
            'product_image' => '1664023457-jackfruit.jpg',
            'product_price' => '40',
            'category_id' => 5,
        ]);


        Product::create([
            'product_name' => 'Calcium Fertilizer',
            'product_description' => 'Highly fortified calcium, magnesium, and iron plant supplement formulated to correct common deficiencies Supplement your existing nutrient program with Cal-Mag Plus To Use: Mix well and use with every watering, as needed, for enhanced growth apply as a foliar spray For use in containers, coco, and when growing in soil Contains formulation of 2-0-0 NPK',
            'product_image' => '1664024115-Calcium Fertilizer.jpg',
            'product_price' => '23',
            'category_id' => 6,
        ]);
        Product::create([
            'product_name' => 'Agricultural Sulfur',
            'product_description' => 'The agricultural sulfur produced by REPSOL and marketed by RLESA is suitable for use as a plant protection product in agriculture. It is included as an Active Substance in Annex I of the 2009/70/EEC Directive. In this regard, Repsol has the power to provide a Letter of Access and Supply Letter to its customers for the formulation of their phytosanitary products.',
            'product_image' => '1664024341-Agricultural Sulfur.webp',
            'product_price' => '19',
            'category_id' => 6,
        ]);

        Product::create([
            'product_name' => 'Potassium Fertilizer',
            'product_description' => 'Good potassium nutrition is vital to consistently improve crop productivity. Potassium’s role in the plant is primarily in plant/soil/air-water relations; it also activates certain enzymes, and it aids in moving captured carbon from plant biomass to reproductive material (grain, fruit, and fiber). Inadequate potassium nutrition leaves the plant more susceptible to different stresses, including water deficit, insect pressure, and pathogen pressure.',
            'product_image' => '1664024531-Potassium Fertilizer.jpg',
            'product_price' => '30',
            'category_id' => 6,
        ]);




    }
}
