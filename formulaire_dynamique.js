
function aff_diabete(){
	if (document.querySelector("input[type='checkbox'][id='diabete']").checked){
		document.getElementById('fm_diabete').style.display='inline';
	}else{
		document.getElementById('fm_diabete').style.display='none';
	}
}

function aff_thyroide(){
	if (document.querySelector("input[type='checkbox'][id='thyroide']").checked){
		document.getElementById('fm_thyroide').style.display='inline';
	}else{
		document.getElementById('fm_thyroide').style.display='none';
	}
}

function aff_hypophyse(){
	if (document.querySelector("input[type='checkbox'][id='hypophyse']").checked){
		document.getElementById('fm_hypophyse').style.display='inline';
	}else{
		document.getElementById('fm_hypophyse').style.display='none';
	}
}

		
