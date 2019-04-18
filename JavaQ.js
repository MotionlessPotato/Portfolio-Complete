ac=0
function cor() {
    window.alert("You are correct");
    ac=ac+1

}
function inc() {
    window.alert("You are incorrect");
}
function q2() {
    document.getElementById('q').innerHTML='Which non-legendary Pokemon has the highest attack stat?';
    document.getElementById('b1').innerHTML='Tyranitar';
    document.getElementById('b1').setAttribute('onclick','inc();q3()');
    document.getElementById('b2').innerHTML='Metagross';
    document.getElementById('b2').setAttribute('onclick','inc();q3()');
    document.getElementById('b3').innerHTML='Rampardos';
    document.getElementById('b3').setAttribute('onclick','cor();q3()');
    document.getElementById('b4').innerHTML='Rhyperior';
    document.getElementById('b4').setAttribute('onclick','inc();q3()')
}
function q3() {
    document.getElementById('q').innerHTML='Which move has the highest base damage in the game?';
    document.getElementById('b1').innerHTML='Giga Impact';
    document.getElementById('b1').setAttribute('onclick','inc();q4()');
    document.getElementById('b2').innerHTML='Focus Punch';
    document.getElementById('b2').setAttribute('onclick','inc();q4()');
    document.getElementById('b3').innerHTML='Hyper Beam';
    document.getElementById('b3').setAttribute('onclick','inc();q4()');
    document.getElementById('b4').innerHTML='Explosion';
    document.getElementById('b4').setAttribute('onclick','cor();q4()')
}
function q4() {
    document.getElementById('q').innerHTML='Which Pokemon is able to do the most damage in the game?';
    document.getElementById('b1').innerHTML='Deoxys';
    document.getElementById('b1').setAttribute('onclick','inc();q5()');
    document.getElementById('b2').innerHTML='Shuckle';
    document.getElementById('b2').setAttribute('onclick','cor();q5()');
    document.getElementById('b3').innerHTML='Wobbaffet';
    document.getElementById('b3').setAttribute('onclick','inc();q5()');
    document.getElementById('b4').innerHTML='Mewtwo';
    document.getElementById('b4').setAttribute('onclick','inc();q5()')
}
function q5() {
    document.getElementById('q').innerHTML='Which of these Pokemon require you to trade it to evolve?';
    document.getElementById('b1').innerHTML='Wooper';
    document.getElementById('b1').setAttribute('onclick','inc();end()');
    document.getElementById('b2').innerHTML='Gastly';
    document.getElementById('b2').setAttribute('onclick','inc();end()');
    document.getElementById('b3').innerHTML='Machoke';
    document.getElementById('b3').setAttribute('onclick','cor();end()');
    document.getElementById('b4').innerHTML='Pinsir';
    document.getElementById('b4').setAttribute('onclick','inc();end()');
}
function end() {
    document.getElementById('b').innerHTML='You got ' + ac + ' questions right!';
    document.getElementById('q').innerHTML='Thank you for taking my quiz';
}