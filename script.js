var bloodGroup = ['A+','B+','O+','A-','B-','O-','AB+','AB-']

var bloodGroupOption = document.getElementById('bloodInput');
bloodGroupOption.innerHTML = "";


for (var i=0;i<bloodGroup.length;i++){
  console.log(bloodGroup[i]);
  bloodGroupOption.innerHTML += '<option value="\''+ bloodGroup[i] +'\'">'+bloodGroup[i]+
                                '</option>';
}
