<!DOCTYPE html>
<html>
<?php include("header.html") ?>
<link type="text/stylesheet" href="products.min.css">

<body class="page-template product_page page-template-template-products page-template-template-products-php page page-id-35">
    <?php include("head.html") ?>      
    <div class="home-body">
        <div class="custom_container inner-padding">
                <div class="products">
                    <div class="container">
                        <h1 class="page-title">Products</h1>
                        <div class="product-tabs col-xs-12" style="padding:0">
                            <div class="main-products-tab row">
                            <div class="tab container">
                                <button class="tablinks col-sm-2 col-xs-12" onclick="openCity(event, 'solar_power_section')" id="defaultOpen">Solar Power Generation System</button>
                                <button class="tablinks col-sm-2 col-xs-12" onclick="openCity(event, 'concentrated_section')">Concentrated Solar Thermal</button>
                                <button class="tablinks col-sm-2 col-xs-12" onclick="openCity(event, 'evaporators_section')">Smart Evaporator</button>
                                <button class="tablinks col-sm-2 col-xs-12" onclick="openCity(event, 'telecome_section')">Telecom Applications</button>
                                <button class="tablinks col-sm-2 col-xs-12" onclick="openCity(event, 'sludge_section')">Solar Sludge Drying</button>
                                <button class="tablinks col-sm-2 col-xs-12" onclick="openCity(event, 'pumps_section')">Solar Pumps</button>
                                <div class="col-sm-offset-2 col-xs-12"></div>
                            </div>
                            <div class="products-info-tabs" >
                                <div id="solar_power_section" class="tabcontent">
                                    <div class="solar_power_tabs ">
                                        <div class="shadow">
                                            <button class="subtablinks  col-sm-4 col-xs-12" onclick="opensub(event, 'metering_info')" id="subdefaultOpen">Net Metering Systems</button>
                                            <button class="subtablinks  col-sm-4 col-xs-12" onclick="opensub(event, 'hybrid_info')">PV-DG Hybrid</button>
                                            <button class="subtablinks  col-sm-4 col-xs-12" onclick="opensub(event, 'zero_hybrid_info')"> Zero Export </button>
                                        </div>
                                    </div>
                                    <div id="metering_info" class="subtabcontent">
                                        <div class="row row-container">
                                            <h1>Industrial Rooftop net metering</h1>
                                            <div class="col-xs-4">
                                                
                                                <!-- <p></p> -->
                                                <div class="basic_content">
                                                    <p>The generated  solar power is used for captive consumption in the industry and excess solar power is sold back to the electricity grid. The excess units given back to the grid are banked in a bi- directional meter and is offset when the demand in the factory is high.</p>
                                                </div>
                                            </div>    
                                            <div class="col-xs-8">
                                                <div class="content_image" style="background-image:url('assets/Net Metering.png')"></div>
                                            </div>                                        
                                        </div>
                                    </div>
                                    <div id="hybrid_info" class="subtabcontent">
                                        <div class="row row-container">
                                                <h1>Solar-Diesel Generator Hybrid Net Metering systems</h1>
                                            
                                            <div class="col-xs-4">
                                                <!-- <p></p> -->
                                                <div class="basic_content">
                                                    <p>To use solar power during a power failure, a reference voltage is taken from the DG to generate solar power while maintaining minimum performance characteristics of the DG. With the expertise in DG manufacturing of our parent company, we have developed a highly efficient hybrid solution for optimum use of solar power during a power failure.</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-8"><div class="content_image" style="background-image:url('assets/PVDG.png')"></div></div>                                            
                                        </div>
                                    </div>
                                    <div id="zero_hybrid_info" class="subtabcontent">
                                        <div class="row row-container">
                                                <h1>Zero Export Solar PV systems</h1>
                                            
                                            <div class="col-xs-4">
                                                <!-- <p></p> -->
                                                <div class="basic_content">
                                                    <p>In cases where the rooftop area available for solar is only sufficient to cater to the loads of the industry, zero export system is used. Its called Zero export since we control any excess solar power from flowing back to the grid.</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-8"><div class="content_image" style="background-image:url('assets/Zero Export.png')"></div></div> 
                                        </div>
                                    </div>
                                </div>
                                <div id="concentrated_section" class="tabcontent">
                                    <h1>Concentrated Solar Thermal</h1> 
                                    <div class="concentrated_info">
                                        <div class="row row-container">
                                            <div class="col-xs-5" >
                                                <div class="basic_content">
                                                        <p>This system comprises of Parabolic Mirrors that track the sun to generate pressurized hot water or steam upto 160 deg cel. This solution is applicable to any industry that needs steam or hot water for their processes. Our concentrated solar thermal solution caters to the pre heating of boiler feed water to targeted high temperatures. Currently, boilers that are used to generate steam, operate on fuels such as diesel, LPG, furnace oil. Pre-heating the boiler feed water to 130 deg cel with our concentrated solar thermal dishes  reduces the operational expenses of the boilers drastically, making the ROI for such systems less than 3 years.</p>
                                                        <p style="margin-top:20px;"><strong>Key features of CST</strong></p>
                                                        <ul style="list-style-type:none">
                                                            <li>Process Hot Water</li>
                                                            <li>Steam Cooking</li>
                                                            <li>Agricultural Drying</li>
                                                            <li>Waste Water Evaporation</li>
                                                            <li>Solar Air Conditioning</li>
                                                            <li>Thermal Desalination</li>
                                                        </ul>                                   
                                                    </div>                                         
                                                </div>
                                                <div class="col-xs-7">
                                                    <video controls >
                                                    <source src="assets/solarayCST.mp4" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="evaporators_section" class="tabcontent">
                                    
                                    <div class="evaporators_info">
                                        <div class="row row-container">
                                                <h1>Smart Evaporators</h1>
                                            
                                            <div class="col-xs-4">
                                                <!-- <p></p> -->
                                                <div class="basic_content">
                                                    <p>Smart Evaporator evaporates 67% more effluent per Kg of steam used in conventional systems. Easy maintenance- Remove pans and scrape away salt in intervals Attractive return on investments integrated with CST/Heat Pump  for better energy savings</p>
                                                    <p><strong>Working Principle</strong></p>
                                                    <p><strong>To maximize evaporation under measured conditions of</strong></p>
                                                    <ul style="list-style-type:none">
                                                        <li>Ambient temperature</li>
                                                        <li>Relative Humidity</li>
                                                        <li>Wind speed</li>
                                                        <li>Effluent temperature</li>
                                                        <li>Salinity</li>
                                                    </ul>
                                                    <p><strong>Enhance Evaporation by</strong></p>
                                                    <ul style="list-style-type:none"><li>Precisely dosing effluent into the pan</li></ul>
                                                    <p><strong>Evaporate </strong></p>
                                                    <ul style="list-style-type:none">
                                                        <li>Several pans to maximize surface area</li>
                                                        <li>High temp fluid injection</li>
                                                        <li>High wind to slice the fluid to a thin layer</li>
                                                        <li>High wind to aid mass transfer</li>

                                                    </ul>
                                                </div>
                                            </div>   
                                            <div class="col-xs-8"><div class="content_image" style="background-image:url('assets/Smart Evapurator.png')"></div></div>                                         
                                        </div>
                                    </div>
                                </div>
                                <div id="telecome_section" class="tabcontent">
                                    
                                    <div class="telecome_info">
                                                <h1>Telecome Applications</h1>
                                        <div class="row row-container">
                                            
                                            <div class="col-xs-4">
                                                <!-- <p></p> -->
                                                <div class="basic_content">
                                                    <p>Telecom towers and solar energy: reduce diesel consumption and energy costs with battery-based and grid-tie solutions. </p><p>To serve this growing demand for connectivity, the network of telecom towers has expanded to far-flung regions of the world. Towers might be sited in remote regions (mountaintops, forests and jungles, deserts) where the grid is nonexistent, or in areas with notoriously unstable grid supplies of electricity. As a result, telecom towers infrastructure companies (towercos) in these regions have long relied on diesel generators as a source of power. But diesel generators run at a lower efficiency level, have become more costly to operate, and produce high CO2 emissions. A battery-based solution—including solar power options—can reduce operating expenses by >35%. Several of these telecom towers also operate in regions with a stable grid supply, but no matter where the telecom tower is located, towercos operators face the unavoidable pain point of high energy bills.</p>
                                                </div>
                                            
                                            </div>
                                            <div class="col-xs-8"><div class="content_image" style="background-image:url('assets/telecom.png')"></div></div>                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="sludge_section" class="tabcontent">
                                    
                                    <div class="sludge_info">
                                        <div class="row row-container">
                                        <h1>Solar Sludge Drying</h1>
                                            <div class="col-xs-4">
                                                
                                                <!-- <p></p> -->
                                                <div class="basic_content">
                                                    <p>Majority of weight of sludge is water content which we evaporate using our sludge drying module.60% of this moisture can be evaporated thus saving approx 60% of Disposal Cost.</p>
                        
                                                </div>                                            
                                            </div>
                                            <div class="col-xs-8"><div class="content_image" style="background-image:url('assets/paint sludge.png')"></div></div>                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="pumps_section" class="tabcontent">
                                    
                                    <div class="pump_info">
                                        <div class="row row-container">
                                        <h1>Solar Pumps</h1>
                                            <div class="col-xs-4">
                                                
                                                <!-- <p></p> -->
                                                <div class="basic_content">
                                                    <p> Solar Pumps are designed to work on solar energy. These pumps are specially designed for Agricultural, Residential, Commercial and Industrial purposes. Controller harness maximum DC power from photo voltaic panel through "Maximum Power Point Tracking" and feed to highly efficient motor which drive a centrifugal pumpset</p>
                                                </div>                                            
                                            </div>
                                            <div class="col-xs-8"><div class="content_image" style="background-image:url('assets/solar-water-pump-1hp-2hp-3hp-5hp-500x500.jpg')"></div></div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.html")?>
    <?php include("foot.php") ?>
    <script>
        document.getElementById("defaultOpen").click();
        document.getElementById("subdefaultOpen").click();
    </script>
    <script>
        $("document").ready(function(){
        console.log(2)
        $(".tablinks").css("height","50px");
        })
  </script>
</body>
</html>