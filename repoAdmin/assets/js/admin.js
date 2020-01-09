const apiurl = `http://${$(location).attr('hostname')}/repoKP/repoSTIHPADA-api/public/`
const baseurl = `http://${$(location).attr('hostname')}/repoAdmin/`

$(document).ready(function () {
	

	//dashboard Admin
	$.ajax({
                url: `${apiurl}/dosen/request/journal/`,
                type: 'GET',
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                success: function (response) {
            
                  t = $('#adminDashboardTable').DataTable({
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
                      }
            
            
                    ]
                  })
                }
              }).done(function (response) {
                var i;
                for (i = 0; i < response.data.length; i++) {
                  var rep = response.data[i].id_rep;
                  t.row.add([
                    "<img src='../../"+response.data[i].path_image+"' class='mr-2' alt='image'>"+response.data[i].nama,
                    response.data[i].judul,
                    "<label class='badge badge-gradient-primary'>PENDING</label>",
                    response.data[i].tahun,
                    "<button type='button' id='appJ' class='appJ btn btn-success btn-icon-text btn-sm' data-toggle='modal' key='" + rep + "' data-target='#aprovedModalsJournal'><i class='rjctJ mdi mdi-file-check btn-icon-prepend'></i> Aprove </button> <button type='button' id='rjctJ' class='rjctJ btn btn-danger btn-icon-text btn-sm ml-3' data-toggle='modal' data-target='#rejectedModalsJournal' key='" + rep + "'> <i class='mdi mdi-close-box btn-icon-prepend' ></i> Tolak </button>",
                  ]).draw(true);
                }

		
		$('#adminDashboardTable').on('click', 'button.appJ', function (event) {
				event.preventDefault();
				// var key = $(this).data('key');
				var key = $(this).attr("key");
					
				$("#aprovedJ").click(function(event){
					event.preventDefault();

					$.ajax({
					url: `${apiurl}admin/approve/journal/${key}`,
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


		$('#adminDashboardTable').on('click', 'button.rjctJ', function (event) {
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


	//members Admin
	$.ajax({
                url: `${apiurl}/dosen/user/all/`,
                type: 'GET',
                dataType: 'json',
		contentType: 'application/json; charset=utf-8',
                success: function (response) {
            
                  t = $('#adminMembersTable').DataTable({
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
                        "targets": [6],
                        "width": "150px",
                        "className": "text-center"
                      }
            
            
                    ]
                  })
                }
              }).done(function (response) {
                var i;
                for (i = 0; i < response.data.length; i++) {
		  var mbr = response.data[i].nip;
		  if(response.data[i].status==0){
			t.row.add([
			"<img src='../../"+response.data[i].path_image+"' class='mr-2' alt='image'>"+response.data[i].nama,
			"<label class='badge badge-gradient-primary'>PENDING</label>",
			response.data[i].email,
			response.data[i].no_hp,
			response.data[i].tempat_lahir,
			response.data[i].tanggal_lahir,
			"<button type='button' id='actM' class='actM btn btn-success btn-icon-text btn-sm' data-toggle='modal' key='" + mbr + "' data-target='#activatedDosenModal'><i class=' mdi mdi-account-check btn-icon-prepend'></i> Aktifkan </button> <button type='button' id='dactM' class='dactM btn btn-danger btn-icon-text btn-sm ml-3' data-toggle='modal' data-target='#rejectedDosenModal' key='" + mbr + "'> <i class='mdi mdi-account-remove btn-icon-prepend' ></i> Non Aktifkan </button>",
			]).draw(true);
			}
		  	if(response.data[i].status==1){
				t.row.add([
				"<img src='../../"+response.data[i].path_image+"' class='mr-2' alt='image'>"+response.data[i].nama,
				"<label class='badge badge-gradient-success'>Actived</label>",
				response.data[i].email,
				response.data[i].no_hp,
				response.data[i].tempat_lahir,
				response.data[i].tanggal_lahir,
				"<button type='button' id='dactM' class='dactM btn btn-danger btn-icon-text btn-sm ml-3' data-toggle='modal' data-target='#rejectedDosenModal' key='" + mbr + "'> <i class='mdi mdi-account-remove btn-icon-prepend' ></i> Non Aktifkan </button>",
				]).draw(true);
				}
				if(response.data[i].status==2){
					t.row.add([
					"<img src='../../"+response.data[i].path_image+"' class='mr-2' alt='image'>"+response.data[i].nama,
					"<label class='badge badge-danger'>Non-Actived</label>",
					response.data[i].email,
					response.data[i].no_hp,
					response.data[i].tempat_lahir,
					response.data[i].tanggal_lahir,
					"<button type='button' id='actM' class='actM btn btn-success btn-icon-text btn-sm' data-toggle='modal' key='" + mbr + "' data-target='#activatedDosenModal'><i class=' mdi mdi-account-check btn-icon-prepend'></i> Aktifkan </button> ",
					]).draw(true);
					}
		}

		
		$('#adminMembersTable').on('click', 'button.actM', function (event) {
				event.preventDefault();
				// var key = $(this).data('key');
				var key = $(this).attr("key");
					
				$("#aprovedM").click(function(event){
					event.preventDefault();

					$.ajax({
					url: `${apiurl}dosen/acc/${key}`,
					type: 'PUT',
				
					dataType: "json"
					, error: function (a, b, c) {
					console.log(a);
					console.log(b);
					console.log(c);
					}
					}).done(function (response) {
					// t.ajax.reload(null, false); 
					location.reload(true);
					// t.row(this).remove().draw(false);
					});

				});

			      });


		$('#adminMembersTable').on('click', 'button.dactM', function (event) {
				event.preventDefault();
				// var key = $(this).data('key');
				var key = $(this).attr("key");
				$("#rejectM").click(function(event){
					event.preventDefault();
					$.ajax({
					url: `${apiurl}dosen/reject/${key}`,
					type: 'PUT',
				
					dataType: "json"
					, error: function (a, b, c) {
					console.log(a);
					console.log(b);
					console.log(c);
					}
					}).done(function (response) {
					// t.ajax.reload(null, false);
					location.reload(true);
					// t.row(this).remove().draw(false);
					});
	
				});
			
				
			
			});
	
		

	});

		
	//Jurnal Admin
	$.ajax({
                url: `${apiurl}/dosen/admin/journal/`,
                type: 'GET',
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                success: function (response) {
            
                  t = $('#adminJournalTable').DataTable({
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

		
		$('#adminJournalTable').on('click', 'button.viewJ', function (event) {
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


		$('#adminJournalTable').on('click', 'button.rjctJ', function (event) {
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
			var id_dosen = $("#id_dosen").val();
			var status = $("#status").val();
			console.log(path);
		

			$.ajax(
			{
			type: "POST",
			method: "POST",
			url: `${apiurl}repodoc/${id_dosen}`,
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
