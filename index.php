<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="w3/w3.css">
    <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
    <script src="js/handlebars-v4.0.11.js" type="text/javascript"></script>
</head>
<body>
    <div class="w3-container w3-col m12">
        <div class="w3-col m1 "><p></p></div>

        <div class="w3-col m10">
            <form id="form" method="POST" action="save.php">
                <div id="feature-details">
                    <h2>Feature</h2>
                    <div class="w3-row">
                        <div class="w3-col m11">
                            <input class="w3-input w3-col m11" placeholder="Title" type="text" name="feature_title" id="feature_title">
                        </div>
                    </div>

                    <div class="w3-row">
                        <textarea placeholder="Description" style="height:120px;" class="w3-input" name="feature_description"></textarea>
                    </div>

                </div>

                <div id="scenarios" class="w3-row">
                    <h2>Scenarios</h2>
                </div>

                <div class="w3-row spacer" style="height:20px;"><p></p></div>

                <div class="w3-row" id="actions">
                    <div class="w3-col m12">
                        <input class="w3-button w3-col m12" type="button" name="add-scenario-button" value="+" onclick="addScenario()">
                    </div>
                </div>

                <div class="w3-row spacer" style="height:40px;"><p></p></div>

                <div class="w3-row">
                    <div class="w3-col m12">
                        <input class="w3-button w3-col m12" type="submit" value="Save" name="Save">
                    </div>
                </div>

            </form>
        </div>

        <div class="w3-col m1 "><p></p></div>
    </div>

    <script id='scenario-template' type="text/x-handlebars-template">
        <div class="w3-row" style="height:20px;"><p></p></div>
        <div class="scenario">
            <div class="w3-row">
                <div class="w3-label w3-col m1">
                    <label for="scenario_{{index}}">Scenario</label>
                </div>
                <div class="w3-col m11">
                    <input class="w3-input w3-col m11" placeholder="Title" type="text" name="scenarios[{{index}}][title]" id="scenario_{{index}}">
                </div>
            </div>

            <div class="w3-row">
                <textarea placeholder="Description" style="height:120px;" class="w3-input" name="scenarios[{{index}}][description]"></textarea>
            </div>
        </div>
    </script>


    <script type="text/javascript">
        var count = 0;
        function addScenario(){
            var characterTemplate = $('#scenario-template').html();
            var compiledCharacterTemplate=Handlebars.compile(characterTemplate);
            $('#scenarios').append(compiledCharacterTemplate({index: count}));
            count++;
        }

        $(document).ready(function() {
            addScenario();
        });
    </script>




</body>
</html>
