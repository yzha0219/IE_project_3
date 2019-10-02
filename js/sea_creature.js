$(document).ready(function(){
    document.getElementById('content').innerHTML='<div class="row" style="margin-top: 3%"><div class="col-md-4"><div class="block-16"><figure><img src="images/sea_creature/jellyfish.jpeg" alt="Image placeholder" class="img-fluid"></figure></div></div><div class="panel-group col-md-8" id="accordion" role="tablist" aria-multiselectable="true"><div class="panel panel-default"><div class="panel-heading" role="tab" id="headingOne"><h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"aria-expanded="false" aria-controls="collapseOne">Box Jellyfish</a></h4></div><div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne"><div class="panel-body"><p>• Domestic vinegar should be poured liberally over any adhering tentacles to inactivate thestinging cells (nematocysts) as soon as possible. Flood the area with vinegar for at least 30seconds.</p><p>• If vinegar is not available, wash the area well using sea water (not fresh water) and pick offtentacles (this is not harmful to the rescuer).</p><p>• Dial 000 for an ambulance and seek help from a lifeguard.</p><p>• Make sure patient does NOT move.</p><p>• A cold pack or ice in a sealed, dry plastic bag may help relieve pain. Take care not to getfresh water on the area as it could activate further stinging cells.</p><p>• Artificial respiration and cardiac massage (cardiopulmonary resuscitation – CPR) may be required.</p><p>• Antivenom is available, and is recommended for all but minor stings.</p></div></div> </div></div></div>';
    $('#bluebottle').click(function(){
        document.getElementById('content').innerHTML='<div class="row"><div class="col-md-4"><div class="block-16"><figure><img src="images/sea_creature/bluebottle.jpeg" alt="Image placeholder" class="img-fluid"></figure></div></div><div class="panel-group col-md-8" id="accordion" role="tablist" aria-multiselectable="true"><div class="panel panel-default"><div class="panel-heading" role="tab" id="headingTwo"><h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bluebottle</a></h4></div><div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo"><div class="panel-body"><p>• Vinegar is NOT recommended.</p><p>• Remove any tentacles with tweezers, forceps or fingers (this is not dangerous to the rescuer; you may experience a harmless prickling feeling).</p><p>• DO NOT rub the area.</p><p>• DO NOT wash off with fresh water — use sea water.</p><p>• Immerse the affected area in hot water (no hotter than the rescuer can comfortably tolerate) for 20 minutes to relieve pain.</p><p>• If pain is not relieved by heat, or hot water is not available, stings may respond to ice packs or anaesthetic creams or lotions.</p><p>• For persistent or generalised pain, or if the sting area is large or involves sensitive areas, call an ambulance and seek assistance from a lifeguard if available.</p></div></div></div></div></div>';
        return false;
    });
    $('#stonefish').click(function(){
        document.getElementById('content').innerHTML='<div class="row"><div class="col-md-4"><div class="block-16"><figure><img src="images/sea_creature/stonefish.jpeg" alt="Image placeholder" class="img-fluid"></figure></div></div><div class="panel-group col-md-8" id="accordion" role="tablist" aria-multiselectable="true"><div class="panel panel-default"><div class="panel-heading" role="tab" id="headingThree"><h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Stonefish</a></h4></div><div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree"><div class="panel-body"><p>• Call an ambulance.</p><p>• Immerse the affected area in hot water to relieve pain. (Try putting an unaffected part of your body in the hot water first to make sure you are not burning yourself.）</p><p>• DO NOT apply a pressure immobilisation bandage.</p><p>• Leave any barbs or spines in place and place padding around them. They may be plugging a wound and preventing blood loss.</p><p>• If the person is unresponsive and not breathing properly, start CPR (cardiopulmonary resuscitation).</p></div></div></div></div></div>';
        return false;
    });
    $('#octopus').click(function(){
        document.getElementById('content').innerHTML='<div class="row"><div class="col-md-4"><div class="block-16"><figure><img src="images/sea_creature/octopus.jpeg" alt="Image placeholder" class="img-fluid"></figure></div></div><div class="panel-group col-md-8" id="accordion" role="tablist" aria-multiselectable="true"><div class="panel panel-default"><div class="panel-heading" role="tab" id="headingFour"><h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Blue-ringed Octopus</a></h4></div><div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour"><div class="panel-body"></p><p>• Pressure immobilisation bandages should be applied, using a broad pressure bandage and splint on the affected limb.</p><p>• Stay with the person, reassure them and keep them still.</p><p>• Assisted or artificial respiration may be needed.</p><p>• Person will need transfer to hospital – prolonged artificial respiration is often required until the effects of the venom wear off.</p><p>• There is no antivenom available.</p></div></div></div></div></div>';
        return false;
    });
    $('#seasnail').click(function(){
        document.getElementById('content').innerHTML='<div class="row"><div class="col-md-4"><div class="block-16"><figure><img src="images/sea_creature/snail.jpeg" alt="Image placeholder" class="img-fluid"> </figure></div></div><div class="panel-group col-md-8" id="accordion" role="tablist" aria-multiselectable="true"><div class="panel panel-default"><div class="panel-heading" role="tab" id="headingFive"><h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"aria-expanded="false" aria-controls="collapseFive">Sea Snail</a></h4></div><div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive"><div class="panel-body"></p><p>• Call 000 for an ambulance.</p><p>• Pressure immobilisation, using a broad pressure bandage and splint, is recommended.</p><p>• Stay with the person, reassure them and keep them still.</p><p>• Prolonged artificial respiration, even mechanical ventilation, may be required.</p><p>• At this stage, there is no antivenom available for cone shell stings.</p><p>• A tetanus injection may also be needed in case the wound is contaminated.</p></div></div></div></div></div>';
        return false;
    });
});