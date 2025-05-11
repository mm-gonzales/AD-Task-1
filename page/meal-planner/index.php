<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Planner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <section class="hero-section d-flex align-items-center justify-content-center text-center">
        <div>
            <h1 class="text-white">Plan Your Meals for the Week</h1>
            <p class="lead text-white">Eat smarter, waste less, and save time with your personalized weekly plan.</p>
        </div>
    </section>


    <div class="container py-5">
        <h1 class = "text-center">Weekly Meal Plan</h1>

        <div class="table-responsive">
            <table class = "table table-bordered text-center">
                <thead class = "table-warning">
                    <tr>
                        <th>Day</th>
                        <th>Breakfast</th>
                        <th>Lunch</th>
                        <th>Dinner</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                        /* Variable Declaration */
                        $weeks = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday',
                        'Saturday', 'Sunday'];
                        $meals = [
                            ['Cereal', 'Wraps', 'BBQ Chicken'],  ['Bagel', 'Rice & Beans', 'Pizza'], ['French Toast', 'Ramen', 'Seafood'],  ['Smoothie', 'Pasta', 'Steak'], ['Oatmeal', 'Grilled Cheese', 'Tacos'], ['Toast & Eggs', 'Burger & Fries', 'Sushi'], ['Pancakes', 'Chicken Salad', 'Spaghetti']
                        ];

                        //Outer loop to display data
                        for( $i = 0; $i < 7; $i++) {
                            echo "<tr>";
                            $week = $weeks[$i];
                            //Conditional Statement to display weeks of the day
                            switch($week){
                                case "Monday":
                                    echo "<td>{$week} 📅</td>";
                                    break;
                                case "Tuesday":
                                    echo "<td>{$week} 🌷</td>";
                                    break;
                                case "Wednesday":
                                    echo "<td>{$week} 🤔</td>";
                                    break;
                                case "Thursday":
                                    echo "<td>{$week} ☀️</td>";
                                    break;
                                case "Friday":
                                    echo "<td>{$week} 🍸</td>";
                                    break;
                                case "Saturday":
                                    echo "<td>{$week} 🏕️</td>";
                                    break;
                                case "Sunday":
                                    echo "<td>{$week} 🌅</td>";
                                    break;
                            }

                            //inner loop to display meals
                            for($j = 0; $j < 3; $j++){
                                echo "<td>{$meals[$i][$j]}</td>";
                            }
                            echo "</tr>";
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>