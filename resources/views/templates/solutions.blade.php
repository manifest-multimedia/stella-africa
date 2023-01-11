<x-frontend-layout :context="$__data">

    <x-page-title :title="$page->title" />

         <!--====== SHOWCASE PART START ======-->
      
         <style> 
         .showcase-area .showcase-item {height:600px !important}
         </style> 

    <section class="showcase-area pb-120 pt-120">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="showcase-thumb">
                        <img src="assets/images/solutions/solar-pv.jpg" alt="showcase">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="showcase-item">
                        <span>Solution</span>
                        <h3 class="title">Solar PV</h3>
                        <p class="text-color-white" style="color:white">Stella offers high quality and robust solar panels from carefully chosen and validated suppliers. </p>
                        <ul>
                            <li><i class="far fa-check"></i> Reduce Reliance on Grid</li>
                            <li><i class="far fa-check"></i> Save on Electricity Costs</li>
                            <li><i class="far fa-check"></i> Go Completely Off Grid</li>
                            <li><i class="far fa-check"></i> Go Green</li>
                            {{-- <li><i class="far fa-check"></i> Office Room</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="showcase-item item-2">
                        <span>Solution</span>
                        <h3 class="title">Battery</h3>
                        <p style="color:white">With our selection of batteries you will receive a high performance energy storage solutions tailored to perform whichever application you require. </p>  
                        <ul>
                            <li><i class="far fa-check"></i> Avoid costly power disruptions</li>
                            <li><i class="far fa-check"></i> Improve grid balancing</li>
                            <li><i class="far fa-check"></i> Store excess renewable energy</li>
                            <li><i class="far fa-check"></i> Reduce your electricity costs</li>
                        
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="showcase-thumb">
                        <img src="assets/images/solutions/battery-solution.jpg" alt="showcase">
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="showcase-thumb">
                        <img src="assets/images/solutions/termal-storage.jpg" alt="showcase">
                    </div>
                </div>
                <div class="col-lg-6" style="height:600px">
                    <div class="showcase-item item-3" style="height:600px !important">
                        <span>Solution</span>
                        <h3 class="title">Thermal Storage</h3>
                        <p style="color:white">Stella is partnering with a Swedish baseload energy storage supplier (Azelio). We offer this technology in hybrid storage systems in all our areas of operation in Africa and Sweden.</p>
                        <p style="color:white">This technology uses Phase Changing Material (PCM) to store excess thermal energy and a Stirling engine to convert the thermal energy and produce a reliable supply of electricity.</p>
                        
                        {{-- <ul>
                            <li><i class="far fa-check"></i> Conference Room</li>
                            <li><i class="far fa-check"></i> Wifi Zone</li>
                            <li><i class="far fa-check"></i> Gaming Zone</li>
                            <li><i class="far fa-check"></i> Playground</li>
                            <li><i class="far fa-check"></i> Office Room</li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="showcase-item item-2">
                        <span>Solution</span>
                        <h3 class="title">Solar Heaters</h3>
                        <p style="color:white">Solar heating systems will reduce or eliminate your fuel use for commercial and industrial heating.  Lowering both your greenhouse gas emissions and energy costs.</p>  
                        <p style="color:white">Stella offers seamlessly integrated high quality solar heating solutions based on recyclable solar collectors from trusted manufacturers.</p>  
                        {{-- <ul>
                            <li><i class="far fa-check"></i> Avoid costly power disruptions</li>
                            <li><i class="far fa-check"></i> Improve grid balancing</li>
                            <li><i class="far fa-check"></i> Store excess renewable energy</li>
                            <li><i class="far fa-check"></i> Reduce your electricity costs</li>
                        
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="showcase-thumb">
                        <img src="assets/images/solutions/solar-heaters.jpg" alt="showcase">
                    </div>
                </div>
            </div>
        </div>
    </section> 
   
    <!--====== SHOWCASE PART ENDS ======-->

    <x-cta-phone />
</x-frontend-layout>