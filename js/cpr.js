$(document).ready(function(){
    document.getElementById('detail').innerHTML='<div class="panel-body">Check for dangers. Consider present or have they been electrocuted? Might he/she be drunk or drug-affected and consequently a hazard to you? Approach with care and do not put yourself in danger. If your kids are in a hazardous area (such as on a road), it is okay to move them as gently as possible to protect both your and their safety.</div><img src="images/CPR/D.png">';
    //document.getElementById('dangers').style.color='black';
    $("#response").click(function(){
        sizeSet();
        document.getElementById('response').className='c_selected';
        document.getElementById('detail').innerHTML='<div class="panel-body">Look for a response. Check if your baby is responsive to your voice or touch. Gently shake them and shout at them, as if you are trying to wake them up. If there is no response,get help.</div><img src="images/CPR/R.png">';
        return false;
    });
    $("#help").click(function(){
        sizeSet();
        document.getElementById('help').className='c_selected';
        document.getElementById('detail').innerHTML='<div class="panel-body">Dial triple zero (000) – ask for an ambulance</div><img src="images/CPR/S.png">';
        return false;
    });
    $("#airway").click(function(){
        sizeSet();
        document.getElementById('airway').className='c_selected';
        document.getElementById('detail').innerHTML='<div class="panel-body">Look at the baby\'s mouth and nose and remove obvious obstructions such as vomit, blood, food or loose teeth. (Only put the baby on their side to clear the mouth and nose if the airway is still obstructed, then put them back on their back on a firm surface to commence chest compressions</div><img src="images/CPR/A.png">';
        return false;
    });
    $("#breathing").click(function(){
        sizeSet();
        document.getElementById('breathing').className='c_selected';
        document.getElementById('detail').innerHTML=' <div class="panel-body">Check if the baby is breathing normally (gasping is not normal breathing). If the baby is breathing normally place in the recovery position and wait for help. If they are not breathing normally then start CPR.</div><img src="images/CPR/B.png">';
        return false;
    });
    $("#cpr").click(function(){
        sizeSet();
        document.getElementById('cpr').className='c_selected';
        document.getElementById('detail').innerHTML='<div class="panel-body">Place one hand on the centre of the kid\'s chest, with your other hand on top and interlock your fingers. With the heel of the bottom hand, press down by one-third of the chest depth, at a steady rate, slightly faster than one compression per second. For smaller children and toddlers use the heel of one hand only. After every 30 chest compressions, give two rescue breaths.</div><img src="images/CPR/C.png">';
        return false;
    });
    $("#aed").click(function(){
        sizeSet();
        document.getElementById('aed').className='c_selected';
        document.getElementById('detail').innerHTML='<div class="panel-body">Only use an adult AED on any person over the age of eight years, who is unresponsive and not breathing normally. For children under the age of eight, ideally, a paediatric AED and pads should be used. Devices differ and instructions should be followed in each instance.</div><img src="images/CPR/D2.png">';
        return false;
    });
    $("#dangers").click(function(){
        sizeSet();
        document.getElementById('dangers').className='c_selected';
        document.getElementById('detail').innerHTML='<div class="panel-body">Check for dangers. Consider present or have they been electrocuted? Might he/she be drunk or drug-affected and consequently a hazard to you? Approach with care and do not put yourself in danger. If your kids are in a hazardous area (such as on a road), it is okay to move them as gently as possible to protect both your and their safety.</div><img src="images/CPR/D.png">';
        return false;
    });
});

function sizeSet(){
    document.getElementById('dangers').className='c_steps';
    document.getElementById('response').className='c_steps';
    document.getElementById('help').className='c_steps';
    document.getElementById('airway').className='c_steps';
    document.getElementById('breathing').className='c_steps';
    document.getElementById('cpr').className='c_steps';
    document.getElementById('aed').className='c_steps';
}

/**
function colorSet(){
    document.getElementById('dangers').style.color='#d33e04';
    document.getElementById('response').style.color='#d33e04';
    document.getElementById('help').style.color='#d33e04';
    document.getElementById('airway').style.color='#d33e04';
    document.getElementById('breathing').style.color='#d33e04';
    document.getElementById('cpr').style.color='#d33e04';
    document.getElementById('aed').style.color='#d33e04';
}
*/
