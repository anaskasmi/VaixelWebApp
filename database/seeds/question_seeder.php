<?php

use Illuminate\Database\Seeder;

class question_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = new \App\ContentModels\Question();
        $question->question_category_id = "3";
        $question->question = "What is Vaixel";
        $question->answer = "e are a transit advertising company headquartered in Casablanca, Morocco which services markets nationwide. As a new communication channel, we specialize in getting a brand’s message seen in geographies of interest through the means of car wrap advertising applied on everyday driver’s cars.
We work with our brand partners in understanding their marketing goals. If hyper-targeted brand-awareness is an important piece of the media plan, we will make an appropriate campaign recommendation regarding the wrap style, quantity of cars, and campaign duration.
Once confirmed, we then recruit, screen, and admit drivers into our brand partner’s campaign who drive in the region of interest and who hit all four of our needed driver quality check points. At a confirmed start date, all admitted drivers come to our facility and their vehicles are wrapped in our brand partner’s advertisement in a matter of hours. The car is then returned to the owner, and for the next several months the car is generating powerful impressions everywhere they drive in their community. Through the use of our phone app, all driving activity is tracked and reported back to our brand partner on a monthly basis.
";
        $question->save();

        $question = new \App\ContentModels\Question();
        $question->question_category_id = "1";
        $question->question = "How am I paid as a Driver ?";
        $question->answer = "We take your bank details the day of the fitting. The payments are then made into your account via a secured transfer at the end of each month.
        Three weeks into the campaign you will be asked to complete a short form which will require you to upload photos of your car and a mileage reading. If this is returned by Thursday 5pm we will check it and payments will be made before the following Monday. If returned after this time then payments will be made the following Friday. This process repeats each month until the end of the campaign. ";
        $question->save();

        $question = new \App\ContentModels\Question();
        $question->question_category_id = "1";
        $question->question = "How can I, as a driver, get paid ?";
        $question->answer = "It depends on the advertisers and length of a campaign that you are matched with as well as the size and type of advert applied to your car";
        $question->save();


        $question = new \App\ContentModels\Question();
        $question->question_category_id = "1";
        $question->question = "Is it free to register as a Driver ?";
        $question->answer = "It's completely free to register. You will never have to pay for anything throughout the campaign. Our income is from the brands that want to advertise on your car, never from car owners.";
        $question->save();


        $question = new \App\ContentModels\Question();
        $question->question_category_id = "1";
        $question->question = "Is my car suitable ?";
        $question->answer = "We have all sorts of cars on our campaigns. For the majority of campaigns, your car will need to be 2009 or newer, that's not to say there isn't a campaign for you if your car is older. It just might take a while longer to find the right one for you.

We do not accept motorbikes or convertibles unfortunately. This is because of the way in which we apply the adverts. We require the back window of a car to display an advert at all times.";
        $question->save();


        $question = new \App\ContentModels\Question();
        $question->question_category_id = "2";
        $question->question = "How can I, as a brand, verify the reliability of Vaixel drivers ?";
        $question->answer = "We use KYC/AML Application to get the best security possible for both the driver and the company. Using an AI-based identity verification software, we guarantee to both parties, the highest level of security. Also, a personal data protection is insured, no matter where you are located.";
        $question->save();


        $question = new \App\ContentModels\Question();
        $question->question_category_id = "3";
        $question->question = "How do you pick drivers for a campaign ?";
        $question->answer = "We select drivers for our brand partner’s campaign by reaching into our expansive driver network and hand selecting the drivers who generate the most exposure in the geographic areas we are targeting.";
        $question->save();

        $question = new \App\ContentModels\Question();
        $question->question_category_id = "3";
        $question->question = "Can we pick the drivers ?";
        $question->answer = "Due to the privacy policies we have in place with our network of registered drivers, we do not open sheet our inventory of drivers for our brand partners to select from. Our brand partner select the location and quantity of cars, and we screen and select the car drivers within our network that match the driver quality criteria.";
        $question->save();

        $question = new \App\ContentModels\Question();
        $question->question_category_id = "3";
        $question->question = "How long does it take to set up a campaign ?";
        $question->answer = "Vaixel requires at least one month from agreement signing to having all cars wrapped and on the road. The driver screening and selection process requires at least two weeks, and, depending upon how many cars are being wrapped, another two weeks to wrap and roll-out all drivers we select for the campaign.";
        $question->save();

    }
}
