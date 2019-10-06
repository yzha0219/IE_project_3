$(document).ready(function(){
    $("#high_hazard").click(function(){
        document.getElementById("flag_detail").innerHTML='<h2 class="flag_head">High Hazard</h2><div class="panel-body">A red flag indicates that the surf is extremely dangerous. This could be due to the presence of big waves, strong rip currents, or other dangerous conditions. You should not enter the ocean in red flag conditions unless you are a very good swimmer. Do not enter the water with children, and always swim with a buddy if you absolutely have to go out in red flag conditions. Ultimately, this flag indicates that you should only swim at your own risk, and even then, take extreme caution when doing so.</div><img class="detail-flags" src="images/flags/high_hazard.jpeg">';
        return false;
    });
    $("#marine_pests_present").click(function(){
        document.getElementById("flag_detail").innerHTML='<h2 class="flag_head">Marine pests present</h2><div class="panel-body">You may not have heard of a purple flag before. This flag means that marine pests like jellyfish, stingrays, sea snakes or other marine life are present in the water, and can cause minor injuries. Once again with purple flags, it\'s swim at your own risk. If a purple flag is present, there could be some very dangerous jellyfish in the waters. We always recommend talking to your lifeguard before entering, as the type of marine pest could vary from bioluminescent algae all the way up to a box jellyfish.</div><img class="detail-flags" src="images/flags/marine_pests_present.jpeg">';
        return false;
    });
    $("#watercraft_use_prohibited").click(function(){
        document.getElementById("flag_detail").innerHTML='<h2 class="flag_head">Watercraft use prohibited</h2><div class="panel-body">If you see a yellow flag with a black ball or circle in the middle, this means that watercraft use is prohibited. Avoid surfing in these areas and using any form of watercraft.</div><img class="detail-flags" src="images/flags/watercraft_use_prohibited.jpeg">';
        return false;
    });
    $("#lifeguard_supervision").click(function(){
        document.getElementById("flag_detail").innerHTML='<h2 class="flag_head">Recommended swimming area with lifeguard supervision</h2><div class="panel-body">Unlike the other flags, the red over yellow flag does not mean something is inherently dangerous. In fact, this flag represents something to enhance your safety at the beach. A red over yellow flag signifies a recommended swimming area that has lifeguard supervision. If available at your beach, we always recommend swimming within red over yellow flag areas. Sure, they may be a bit more crowded, but there\'s nothing more important than your safety at the beach.</div><img class="detail-flags" src="images/flags/lifeguard_supervision.jpeg">';
        return false;
    });
    $("#medium_hazard").click(function(){
        document.getElementById("flag_detail").innerHTML='<h2 class="flag_head">Medium Hazard</h2><div class="panel-body">The yellow flag means that the surf presents a medium hazard. This could mean it\'s a rough day out in the waves, there\'s large waves, or there may be a small rip current. In yellow flag conditions (or really any surf conditions), we recommend adult supervision at all times. Additionally, if you\'re taking your kids out in the water, always wear life vests. Yellow flags are generally the most common type of flag seen. It\'s recommended that you take precautions before swimming in a yellow flag environment.</div><img class="detail-flags" src="images/flags/medium_hazard.jpeg">';
        return false;
    });
    $("#watercraft_area").click(function(){
        document.getElementById("flag_detail").innerHTML='<h2 class="flag_head">Watercraft area</h2><div class="panel-body">A black and white area is designated for watercraft, rather than for swimming. Avoid swimming in watercraft areas if at all possible. These areas are essentially dedicated surfing areas. The conditions are ripe for surfing and the flag signifies non-surfers to stay out of the area, to keep both surfers and beachgoers safe.</div><img class="detail-flags" src="images/flags/watercraft_area.jpeg">';
        return false;
    });
    $("#offshore_wind").click(function(){
        document.getElementById("flag_detail").innerHTML='<h2 class="flag_head">High Hazard</h2><div class="panel-body">An orange windsock indicates the presence of offshore or strong winds. If there\'s an orange windsock on your beach, avoid using any type of inflatable or float.</div><img class="detail-flags" src="images/flags/offshore_wind.jpeg">';
        return false;
    });
    $("#public_use").click(function(){
        document.getElementById("flag_detail").innerHTML='<h2 class="flag_head">Water is closed to public use</h2><div class="panel-body">A red flag over another red flag means extremely high hazard. Water is closed to public use. This flag type is reserved for some of the most dangerous surf conditions. We strongly advise against going into waters in these conditions. Avoid going into surf conditions with double red flags at all costs.</div><img class="detail-flags" src="images/flags/public_use.jpeg">';
        return false;
    });
});