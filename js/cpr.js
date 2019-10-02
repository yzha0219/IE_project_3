$(document).ready(function(){
    document.getElementById('detail').innerHTML='<div class="panel-body">Check for dangers. Consider present or have they been electrocuted? Might he/she be drunk or drug-affected and consequently a hazard to you? Approach with care and do not put yourself in danger. If your kids are in a hazardous area (such as on a road), it is okay to move them as gently as possible to protect both your and their safety.</div>';
    $("#response").click(function(){
        document.getElementById('detail').innerHTML='<div class="panel-body">Look for a response. Check if your baby is responsive to your voice or touch. Gently shake them and shout at them, as if you are trying to wake them up. If there is no response,get help.</div>';
        return false;
    });
    $("#help").click(function(){
        document.getElementById('detail').innerHTML='<div class="panel-body">Dial triple zero (000) – ask for an ambulance</div>';
        return false;
    });
    $("#airway").click(function(){
        document.getElementById('detail').innerHTML='<div class="panel-body">Look at the baby\'s mouth and nose and remove obvious obstructions such as vomit, blood, food or loose teeth. (Only put the baby on their side to clear the mouth and nose if the airway is still obstructed, then put them back on their back on a firm surface to commence chest compressions</div>';
        return false;
    });
    $("#breathing").click(function(){
        document.getElementById('detail').innerHTML=' <div class="panel-body">Check if the baby is breathing normally (gasping is not normal breathing). If the baby is breathing normally place in the recovery position and wait for help. If they are not breathing normally then start CPR.</div>';
        return false;
    });
    $("#cpr").click(function(){
        document.getElementById('detail').innerHTML='<div class="panel-body">Place one hand on the centre of the kid\'s chest, with your other hand on top and interlock your fingers. With the heel of the bottom hand, press down by one-third of the chest depth, at a steady rate, slightly faster than one compression per second. For smaller children and toddlers use the heel of one hand only. After every 30 chest compressions, give two rescue breaths.</div>';
        return false;
    });
    $("#rescue").click(function(){
        document.getElementById('detail').innerHTML='<div class="panel-body">Look at the baby\'s mouth and nose, remove any visible obstructions, keep the baby\'s head in a neutral position with no pressure by your hands or fingers across the front of the baby\'s neck - do not tilt the head or lift the chin. Place your mouth over the mouth and nose of the baby and using a small breath, blow into their mouth, checking that their chest rises. Perform 2 rescue breaths. Continue with cycles of 30 chest compressions then 2 rescue breaths until they begin to recover or emergency help arrives.</div>';
        return false;
    });
    $("#aed").click(function(){
        document.getElementById('detail').innerHTML='<div class="panel-body">Only use an adult AED on any person over the age of eight years, who is unresponsive and not breathing normally. For children under the age of eight, ideally, a paediatric AED and pads should be used. Devices differ and instructions should be followed in each instance.</div>';
        return false;
    });
});