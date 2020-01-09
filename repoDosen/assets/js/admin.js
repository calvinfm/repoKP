const apiurl = `http://${$(location).attr('hostname')}/repoKP/repoSTIHPADA-api/public/`
const baseurl = `http://${$(location).attr('hostname')}/repoDosen/`

$(document).ready(function () {
	
	//Jurnal Dosen
	$.ajax({
                url: `${apiurl}/dosen/all/journal/${id}`,
                type: 'GET',
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                success: function (response) {
            
                  t = $('#dosenJournalTable').DataTable({
                    "columnDefs": [
                      {
                        "targets": [0],
                        "width": "200px",
                        "className": "text-left"
                      },
                      {
                        "targets": [3],
                        "width": "50px",
                        "className": "text-center"
                      },
                      {
                        "targets": [2],
                        "width": "50px",
                        "className": "text-center"
                      },
                      {
                        "targets": [4],
                        "width": "150px",
                        "className": "text-center"
                      },
                      {
                        "targets": [1],
                        "width": "200px",
                        "className": "text-left"
                      },
                      {
                        "targets": [5],
                        "width": "200px",
                        "className": "text-center"
                      }
            
            
                    ]
                  })
                }
              }).done(function (response) {
		var i;
                for (i = 0; i < response.data.length; i++) {
                  var rep = response.data[i].id_rep;
                  t.row.add([
                    response.data[i].judul,
                    response.data[i].tahun,
		    response.data[i].author,
                    "<img src='../../"+response.data[i].path_image+"' class='mr-2' alt='image'>"+response.data[i].nama,
                    response.data[i].email,
                    "<button type='button' id='viewJ' class='viewJ btn btn-primary btn-icon-text btn-sm' key='" + rep + "'> <i class='mdi mdi-download btn-icon-prepend'></i> Preview </button> <button type='button' id='rjctJ' class='rjctJ btn btn-danger btn-icon-text btn-sm ml-3' data-toggle='modal' data-target='#rejectedModalsJournal' key='" + rep + "'> <i class='mdi mdi-close-box btn-icon-prepend' ></i> Block </button>",
                  ]).draw(true);
                }

		
		$('#dosenJournalTable').on('click', 'button.viewJ', function (event) {
				event.preventDefault();
				// var key = $(this).data('key');
				var key = $(this).attr("key");
				
					$.ajax({
					url: `${apiurl}repodoc/${key}`,
					type: 'GET',
					dataType: "json",
					success: function (res) {
						var tampil
						if (res.Status == "Success") {
							
							tampil =
								`
								<h4 class="card-title">${res.data.judul}</h4>
                  						<span>Authors : ${res.data.author} </span>
                  						<iframe class="mt-3" src="${res.data.path}" width="100%" height="1000px"></iframe>
					`;
							$("#tampilJurnal").html(tampil);
						}
					}
					, error: function (a, b, c) {
					console.log(a);
					console.log(b);
					console.log(c);
					}
					}).done(function (response) {
					// t.row(this).remove().draw(false);
					});


			      });


		$('#dosenJournalTable').on('click', 'button.rjctJ', function (event) {
				event.preventDefault();
				// var key = $(this).data('key');
				var key = $(this).attr("key");
				$("#rejectedJ").click(function(event){
					event.preventDefault();
					$.ajax({
					url: `${apiurl}admin/reject/journal/${key}`,
					type: 'PUT',
				
					dataType: "json"
					, error: function (a, b, c) {
					console.log(a);
					console.log(b);
					console.log(c);
					}
					}).done(function (response) {
					t.row(this).remove().draw(false);
					});
	
				});
			
				
			
			});
	
		

	});


		if(document.getElementById("addButtonJournal")!=null){
		//ADMIN Upload_Journal
		document.getElementById("addButtonJournal").addEventListener("click", function (event) {
			event.preventDefault();
			var file = document.getElementById("inputPath").files[0];
			// document.querySelector("#inputPath");
			let path = new FormData();
			// form.append('files', file.files[0]);
			path.append('path', file);
			
			// var path = $("#inputPath").get(0).files[0];
			var judul = $("#inputAuthors").val();
			var abtraks = $("#inputAbstrak").val();
			var author = $("#inputAuthors").val();
			var tahun = $("#inputTahun").val();
		

			$.ajax(
			{
			type: "POST",
			method: "POST",
			url: `${apiurl}repodoc/dosen/${id2}`,
			contentType: false,
			processData: false,
			data:path,
			//dataType: 'JSON',
			success: function (res) {
				if(res.Status=="Success"){
					$.ajax(
						{
						type: "PUT",
						method: "PUT",
						url: `${apiurl}repodoc/dosen/${res.id}/input`,
						data: {	
								'judul': judul,
								'abtraks': abtraks,
								'author': author,
								'tahun': tahun
								},
						//dataType: 'JSON',
						success: function (res) {
						}
						});
						alert("Berhasil Upload Journal");
				}else{
					alert("Error, Check File!");
				}
			
		}
			});
		});
	}

	if(document.getElementById("regisButton")!=null){
		document.getElementById("regisButton").addEventListener("click", function (event) {
			event.preventDefault();
			var regisNama = $("#regisNama").val();
			var regisNip = $("#regisNip").val();
			var regisTempatL = $("#regisTempatL").val();
			var regisTanggalL = $("#regisTanggalL").val();
			var regisEmail = $("#regisEmail").val();
			var regisPassword = $("#regisPassword").val();
			var confirm_password = $("#confirm_password").val();
			if(regisPassword==confirm_password){
				$.ajax(
					{
					type: "POST",
					method: "POST",
					url: `${apiurl}repodoc/${res.id}/input`,
					data: {	
							'judul': judul,
							'abtraks': abtraks,
							'author': author,
							'tahun': tahun,
							'status': status
							},
					//dataType: 'JSON',
					success: function (res) {
					}
					});
			}else{
				alert("Password Not Match!")
			}


			
		});
	}
	      
	

	


});