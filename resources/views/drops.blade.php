<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pc builder</title>
    <link rel="stylesheet" href="css/pc_builder.css">
</head>
<body>
    @extends('layouts.navbar')

    <div class="pc-builder">
        <div class="pc-builder-header">
            <h1>Custom build</h1>
            <p>Build your own pc by selecting the components you want</p>
        </div>
        <div class="content">
            <form class="components" action="custom_build.php" method="post">
                <div class="component-options">
                    <label for="cpu"><img src="images/cpu-free-material-2-svgrepo-com.svg"></label>
                    <h2>CPU</h2>
                    <select name="cpu" id="cpu" onchange="updateMotherboardOptions(this)">
                        <option value="" data-price="0">Select CPU</option>
                        <option value="Ryzen 5 5600x" data-price="300">Ryzen 5 5600x - $300</option>
                        <option value="Ryzen 7 5800x" data-price="400">Ryzen 7 5800x - $400</option>
                        <option value="Ryzen 7 5800x3D" data-price="500">Ryzen 7 5800x3D - $500</option>
                        <option value="Ryzen 9 5950x" data-price="700">Ryzen 9 5950x - $700</option>
                        <option value="Intel 3 13100F" data-price="200">Intel 3 13100F - $200</option>
                        <option value="Intel 5 13600K" data-price="250">Intel 5 13600K - $250</option>
                        <option value="Intel 7 13700K" data-price="350">Intel 7 13700K - $350</option>
                        <option value="Intel 9 13900K" data-price="450">Intel 9 13900K - $450</option>
                        <option value="Intel 9 13900KF" data-price="550">Intel 9 13900KF - $550</option>
                        <option value="Intel 9 14900KS" data-price="650">Intel 9 14900KS - $650</option>
                    </select>
                </div>
                <div class="component-options">
                    <label for="motherboard"><img src="images/motherboard-svgrepo-com.svg"></label>
                    <h2>Motherboard</h2>
                    <select name="motherboard" id="motherboard">
                        <option value="" data-price="0">Select Motherboard</option>
                        <option value="B550" data-price="100">B550 - $100</option>
                        <option value="X570" data-price="200">X570 - $200</option>
                        <option value="B660" data-price="150">B660 - $150</option>
                        <option value="Z690" data-price="250">Z690 - $250</option>
                    </select>
                </div>
                <div class="component-options">
                    <label for="ram"><img src="images/ram-memory-svgrepo-com.svg"></label>
                    <h2>RAM</h2>
                    <select name="ram" id="ram">
                        <option value="">Select RAM</option>
                        <option value="" data-price="0">Select RAM</option>
                        <option value="16Gb DDR4 3200Mhz" data-price="60">16Gb DDR4 3200Mhz - $60</option>
                        <option value="16Gb DDR4 3600Mhz" data-price="70">16Gb DDR4 3600Mhz - $70</option>
                        <option value="32Gb DDR4 3200Mhz" data-price="120">32Gb DDR4 3200Mhz - $120</option>
                        <option value="32Gb DDR4 3600Mhz" data-price="130">32Gb DDR4 3600Mhz - $130</option>
                        <option value="64Gb DDR4 3600Mhz" data-price="240">64Gb DDR4 3600Mhz - $240</option>
                    </select>
                </div>
                <div class="component-options">
                    <label for="storage"><img src="images/hard-drive-device-svgrepo-com.svg"></label>
                    <h2>Storage</h2>
                    <select name="storage" id="storage">
                        <option value="" data-price="0">Select Storage</option>
                        <option value="500GB nvme SSD pcie 4.0" data-price="50">500GB nvme SSD pcie 4.0 - $50</option>
                        <option value="1TB nvme SSD pcie 4.0" data-price="100">1TB nvme SSD pcie 4.0 - $100</option>
                        <option value="2TB nvme SSD pcie 4.0" data-price="200">2TB nvme SSD pcie 4.0 - $200</option>
                        <option value="4TB nvme SSD pcie 5.0" data-price="400">4TB nvme SSD pcie 5.0 - $400</option>
                    </select>
                </div>
                <div class="component-options">
                    <label for="gpu"><img src="images/video-card-svgrepo-com.svg"></label>
                    <h2>GPU</h2>
                    <select name="gpu" id="gpu">
                        <option value="" data-price="0">Select GPU</option>
                        <option value="RTX 4060" data-price="300">RTX 4060 - $300</option>
                        <option value="RX 6600" data-price="400">RX 6600 - $400</option>
                        <option value="RTX 4060 TI" data-price="500">RTX 4060 TI - $500</option>
                        <option value="RX 6600 XT" data-price="600">RX 6600 XT - $600</option>
                        <option value="RX 7600 XT" data-price="700">RX 7600 XT - $700</option>
                        <option value="RTX 4070" data-price="800">RTX 4070 - $800</option>
                        <option value="RX 7800 XT" data-price="900">RX 7800 XT - $900</option>
                        <option value="RTX 4070 TI" data-price="1000">RTX 4070 TI - $1000</option>
                        <option value="RX 7900 GRE" data-price="1100">RX 7900 GRE - $1100</option>
                        <option value="RTX 4080" data-price="1200">RTX 4080 - $1200</option>
                        <option value="RX 7900 XT" data-price="1300">RX 7900 XT - $1300</option>
                        <option value="RTX 4080 TI" data-price="1400">RTX 4080 TI - $1400</option>
                        <option value="RX 7900 XTX" data-price="1500">RX 7900 XTX - $1500</option>
                        <option value="RTX 4090" data-price="1600">RTX 4090 - $1600</option>
                    </select>
                </div>
            </form>
            <form class="selected-options" action="php_functions/custom_pc_order_process.php" method="post">
                <h2>Resume</h2>
                <p>CPU: <span id="cpu-resume">None</span>
                    <input type="hidden" name="cpu" id="cpu-input" value="None">
                </p>
                <p>Motherboard: <span id="motherboard-resume">None</span>
                    <input type="hidden" name="motherboard" id="motherboard-input" value="None">
                </p>
                <p>RAM: <span id="ram-resume">None</span>
                    <input type="hidden" name="ram" id="ram-input" value="None">
                </p>
                <p>Storage: <span id="storage-resume">None</span>
                    <input type="hidden" name="storage" id="storage-input" value="None">
                </p>
                <p>GPU: <span id="gpu-resume">None</span>
                    <input type="hidden" name="gpu" id="gpu-input" value="None">
                </p>
                <p>Total: <span id="total">0</span>
                    <input type="hidden" name="total" id="total-input" value="0">
                </p>

                <button type="submit">Build PC</button>
            </form>
        </div>
        @extends('layouts.footer')

        <script>
            function updateMotherboardOptions(cpuSelect) {
                var motherboardSelect = document.getElementById('motherboard');
                motherboardSelect.innerHTML = ''; // Clear current options

                if (cpuSelect.value === 'cpu5' || cpuSelect.value === 'cpu6' || cpuSelect.value === 'cpu7') {
                    // If one of the selected CPUs is chosen, only allow B660 and Z690 motherboards
                    var option1 = document.createElement('option');
                    option1.value = 'b660';
                    option1.text = 'B660 Motherboard - $150';
                    motherboardSelect.add(option1);

                    var option2 = document.createElement('option');
                    option2.value = 'z690';
                    option2.text = 'Z690 Motherboard - $250';
                    motherboardSelect.add(option2);
                } else {
                    // If another CPU is chosen, allow all motherboards
                    var option1 = document.createElement('option');
                    option1.value = 'b550';
                    option1.text = 'B550 Motherboard - $100';
                    motherboardSelect.add(option1);

                    var option2 = document.createElement('option');
                    option2.value = 'x570';
                    option2.text = 'X570 Motherboard - $200';
                    motherboardSelect.add(option2);
                }
            }

            // Get all select elements
            var selects = document.querySelectorAll('select');

            // Add an event listener to each select element
            selects.forEach(function(select) {
                select.addEventListener('change', function() {
                    // Get the selected option
                    var selectedOption = this.options[this.selectedIndex];

                    // Get the corresponding span element in the resume form
                    var span = document.getElementById(this.name + '-resume');

                    // Update the text of the span element with the text of the selected option
                    span.textContent = selectedOption.text;

                    // Update the total price
                    updateTotalPrice();
                });
            });

            // Change the hidden input value to the selected option value
            selects.forEach(function(select) {
                select.addEventListener('change', function() {
                    var selectedOption = this.options[this.selectedIndex];
                    var input = document.getElementById(this.name + '-input');
                    input.value = selectedOption.value;
                });
            });

            (function createNewPc(callback) {
                // Make an object pc with the selected components
                // Stap 1: Selecteer alle invoervelden met hun respectievelijke ID's
                const cpu_input = document.getElementById('cpu-input');
                const motherboard_input = document.getElementById('motherboard-input');
                const ram_input = document.getElementById('ram-input');
                const storage_input = document.getElementById('storage-input');
                const gpu_input = document.getElementById('gpu-input');

                // Stap 2: Maak een pcComponents object met Spread en Rest operators
                const pcComponents = {
                    cpu: cpu_input.value,
                    motherboard: motherboard_input.value,
                    ram: ram_input.value,
                    storage: storage_input.value,
                    gpu: gpu_input.value,
                    // Voeg overige componenten toe met Spread operator
                    ...extraComponents({ psu: "Corsair 750W", fans: "Noctua NF-A12x25" })
                };

                // Make an array of the pc components
                const pcComponentsArray = Object.values(pcComponents);

                // Gebruik de find methode om het eerste component met de naam 'cpu' te vinden
                const foundComponent = pcComponents.find(component => component.name === 'cpu');

                if (foundComponent) {
                    console.log(`Found component: ${foundComponent.name} - ${foundComponent.value}`);
                } else {
                    console.log('Component not found');
                }

                // Helperfunctie om extra componenten toe te voegen
                function extraComponents(components) {
                    return {
                        ...components // Spread operator om alle componenten uit het argument 'components' toe te voegen aan het object dat wordt geretourneerd.
                    };
                }

                callback()

            })();

            const displayPc = () => {
                // Array van ID's
                const componentIds = ['cpu-input', 'motherboard-input', 'ram-input', 'storage-input', 'gpu-input'];

                // Object om de componenten op te slaan
                let pcComponents = {};

                // For loop om door elke ID te itereren
                for (let i = 0; i < componentIds.length; i++) {
                    // Huidige ID selecteren
                    let componentId = componentIds[i];

                    // Haal de naam van de component af van de ID (zonder '-input')
                    let componentName = componentId.split('-')[0];

                    // Sla de waarde op in het object met de componentnaam als sleutel
                    pcComponents[componentName] = document.getElementById(componentId).value;
                }

                // Output van pcComponents object
                console.log(pcComponents);
            };

            createNewPc(displayPc);

            // Function to update the total price

            function updateTotalPrice() {
                var total = 0;

                // Add the price of each selected option to the total
                selects.forEach(function(select) {
                    var selectedOption = select.options[select.selectedIndex];
                    total += Number(selectedOption.getAttribute('data-price') || 0);
                });

                // Update the text of the total span element with the total price
                document.getElementById('total').textContent = '$' + total.toFixed(2);
            }

            // Asynchronous function using async/await
            async function callPhpScript(url) {
                try {
                    const response = await fetch(url); // Await the fetch call
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    const data = await response.json(); // Await the JSON processing
                    console.log('Data received:', data);
                    return `PHP script responded with: ${data.message}`;
                } catch (error) {
                    console.error('Fetch error:', error);
                    return `Error: ${error.message}`;
                }
            }

            function upgradeRam(pcData) {
                if (pcData.ram === '32GB DDR4') {
                    pcData.ram = '64GB DDR4'; // Upgrade de RAM
                }
                return pcData;
            }

            async function fetchAndDisplayPcData() {
                try {
                    const response = await fetch('path/to/your/php/or/json/file');
                    let data = await response.json(); // Convert JSON string to JavaScript object

                    // Upgrade RAM als dat nodig is
                    data = upgradeRam(data);

                    // Display the upgraded data
                    displayPcData(data);
                } catch (error) {
                    console.error('Er is een probleem met het ophalen van de gegevens:', error);
                }
            }

            fetchAndDisplayPcData(); // Roep de functie aan om de geüpgradede gegevens op te halen en weer te geven



            // Gebruik de callPhpScript functie
            callPhpScript('php_functions/custom_pc_order_process.php')
                .then(message => {
                    console.log(message); // "PHP script responded with: Script executed successfully."
                })
                .catch(error => {
                    console.error(error); // Dit zal alleen loggen als er een fout is bij het ophalen van de PHP-bestand
                });

                function loadScript(url) {
                    return new Promise((resolve, reject) => {
                        // Maak een nieuw script element
                        const script = document.createElement('script');
                        script.src = url;
                        script.onload = () => {
                            // Resolves de Promise als het script succesvol geladen is
                            resolve(`Script loaded successfully from ${url}`);
                        };
                        script.onerror = () => {
                            // Verwerpt de Promise als er een fout optreedt bij het laden van het script
                            reject(`Failed to load script from ${url}`);
                        };
                        // Voeg het script toe aan de document body
                        document.body.appendChild(script);
                    });
                }

                // Gebruik de loadScript functie
                loadScript('path/to/your/script.js')
                    .then(message => {
                        console.log(message); // "Script loaded successfully from path/to/your/script.js"
                    })
                    .catch(error => {
                        console.error(error); // "Failed to load script from path/to/your/script.js"
                    });

        </script>
        </body>
</html>
