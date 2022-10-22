		//whenever script is loaded aka Global
		var $sl;
		var $todoArr = [];

		//load whenever page is loaded
		function onloadfunction() {
			
     	var $todo = localStorage.getItem('todo');
     	if ($todo === null) {
		 	todoArr =[];
		 	$sl = 1;
		 	document.getElementById("empty").style.display = "block";
		 	document.getElementById("tablediv").style.display = "none";
		}
		else {
			$todoArr =JSON.parse($todo);
			$sl=($todoArr.length-1);
			console.log($todoArr);
			if($todoArr.length !== 0)
			{
    		$sl=(parseInt($todoArr[$sl]["SL"])+1);
		 	

		 	//showing the to-do's
		 	var table = document.getElementById("myTable");
			for (let i = 0; i < $todoArr.length; i++) {
				document.getElementById("tablediv").style.display = "block";
				document.getElementById("empty").style.display = "none";
		     	var row   = table.insertRow(i);
		    	var cell1 = row.insertCell(0);
		    	var cell2 = row.insertCell(1);
		    	var cell3 = row.insertCell(2);
		    	var cell4 = row.insertCell(3);
		    	var cell5 = row.insertCell(4);
		    	
		    	cell1.innerHTML = '<b>'+(i+1)+'</b>';
		    	cell2.innerHTML = $todoArr[i]['Title'];
		    	cell3.innerHTML = $todoArr[i]['Created At'];
		    	if ($todoArr[i]["Status"]==="Not Completed") {
		    		cell4.innerHTML = '<div class="badge bg-warning" id="'+$todoArr[i]["SL"]+'"">'+$todoArr[i]["Status"]+'</div>';
		    	} else {
		    		cell4.innerHTML = '<div class="badge bg-success" id="'+$todoArr[i]["SL"]+'"">'+$todoArr[i]["Status"]+'</div>';
		    	}
		    	cell5.innerHTML = '<div><a class="btn btn-info" id="edit'+i+'"" onclick="return editToDo(this.id)">Edit</a> <a class="btn btn-danger" id="dlt'+$todoArr[i]["SL"]+'"" onclick="return deleteToDo(this.id)">Delete</a></div>';
			}
			}
			else{
				document.getElementById("empty").style.display = "block";
		 		document.getElementById("tablediv").style.display = "none";
			}
		}
		}


function addToDo() {
	let title = document.myForm.title.value;
	if (!title.length === 0 || title.trim()) { 
    	const d = new Date().toLocaleString(); 
    	let status="Not Completed";
    	const $currentData = { "SL": $sl, 
    			  "Title": title, 
    			  "Created At": d,
    		  	  "Status": status };

    	$todoArr.push($currentData);
    	localStorage.setItem("todo", JSON.stringify($todoArr)); 
	}			
}

function deleteToDo(id){
	id = parseInt(id.substr(3));
	$todoArr = $todoArr.filter(data => data.SL != id);
	localStorage.setItem("todo", JSON.stringify($todoArr));
	location.reload();
}

function editToDo(id){
	$('#editModal').modal('show');
	id = parseInt(id.substr(4));
	document.getElementById('x-id').value=id;
	document.getElementById('x-id').innerHTML=$todoArr[id]['SL'];
	document.getElementById('x-id').style.visibility = 'hidden';
	document.getElementById('editDoTitle').value=$todoArr[id]['Title'];
	document.getElementById('x-createdat').innerHTML=$todoArr[id]['Created At'];
}
function saveEdits(){
	let etitle = document.getElementById('editDoTitle').value;
	let eid = document.getElementById('x-id').value;
	//alert(eid);
	if (!etitle.length === 0 || etitle.trim()) {
		let $sts = "";
		if (document.getElementById('completed').checked) {sts="Completed";}
		else {sts="Not Completed";}
		$todoArr[eid]['Title']=etitle;
		$todoArr[eid]['Status']=sts;
		localStorage.setItem("todo", JSON.stringify($todoArr));
	}
	else{alert("Empty Task")};
}