const apiurl = `http://${$(location).attr('hostname')}/repoKP/repoSTIHPADA-api/public/`
const baseurl = `http://${$(location).attr('hostname')}/repoKP/`

$(document).ready(function () {
   
	$.ajax({
		url: `${apiurl}/repodoc/dosen`,
                type: 'GET',
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                success: function (response) {
			if(response.Status=="Success"){
				
				if(response.data[0].id_dosen != 1){
					var tampilan = `
					<div class="col-md-12">
					<h4 class="text-heading">${response.data[0].judul}</h4>
					</div>
					<div class="col-md-12">
					<p>Authors : ${response.data[0].author}
					<br>
					Tahun : ${response.data[0].tahun}
					</p>
					</div>
					<div class="card-body">
					<h6 class="text-heading text-center">Abstrak</h6>
					<p class="text-dark">${response.data[0].abstrak}</p>
					</div>
					<div class="embed-responsive embed-responsive-1by1">
					<iframe class="" src="${response.data[0].path}" width="100%" height="1000px"></iframe>
					</div>
					<div class="card-body">
					<p>Publisher : ${response.data[0].nama}</p>
					</div>
					`;

					$("#tampilEjournal").html(tampilan);
				}

				if(response.data[0].id_dosen == 1){
					var tampilan = `
					<div class="col-md-12">
					<h4 class="text-heading">${response.data[0].judul}</h4>
					</div>
					<div class="col-md-12">
					<p>Authors : ${response.data[0].author}
					    <br>
					    Tahun : ${response.data[0].tahun}
					</p>
					</div>
					<div class="card-body">
					    <h6 class="text-heading text-center">Abstrak</h6>
					    <p class="text-dark">${response.data[0].abstrak}</p>
					</div>
					<div class="embed-responsive embed-responsive-1by1">
					    <iframe class="" src="../repoAdmin/assets/${response.data[0].path}" width="100%" height="1000px"></iframe>
					</div>
					<div class="card-body">
					    <p>Publisher : ${response.data[0].nama}</p>
					</div>
					`;
	
					$("#tampilEjournal").html(tampilan);
					}

			}
                      }
              }).done(function (response) {
		if(response.Status=="Success"){
			var sideJournal = `` ;
			var tampungSide = []  ;
			var i = 0;
			var t = 0;
			for(i=0;i<response.data.length;i++){
				if(i==0){
					tampungSide[t] = ``;
				}
				if(i%8==0&&i!=0){
					t++;
					tampungSide[t] = ``;
				}
				// console.log(tampungSide[t]);
				
				var jud = response.data[i].judul;
				var auth = response.data[i].author;
				var tahu = response.data[i].tahun;
				var abs = response.data[i].abstrak;
				var path = response.data[i].path;
				var nam = response.data[i].nama;
				var dos = response.data[i].id_dosen;
				
				tampungSide[t] += `
				<div class="single-post-list d-flex flex-row align-items-center">
				<div class="details">
				<a id="viewJ" href="#tampliEjournale" dos="${dos}" jud="${jud}" auth="${auth}" tahu="${tahu}" abs="${abs}" path="${path}" nam="${nam}">
					<h6>${response.data[i].judul}</h6>
				</a>
				<p class="font-weight-bold">Authors : ${response.data[i].author}</p>
				<p>${response.data[i].tahun} </p>
				</div>
				</div>
				`;
			}

			tampungSide[0] += `</div>
			<nav class="blog-pagination justify-content-center d-flex">
			    <ul class="pagination">
				<li class="page-item disabled">
				    <a href="#" class="page-link" aria-label="Previous">
					<span aria-hidden="true">
					    <span class="lnr lnr-chevron-left"></span>
					</span>
				    </a>
				</li>
				`;

				var da = 1;
			for(i=0;i<=t;i++){
				// console.log(t);
//				<li class="page-item"><a href="#" class="page-link">02</a></li>
			if(da != 1)			{
				tampungSide[0] += `
				
				<li class="page-item"><a href="#" class="page-link" id="paginations" val="${da}">0${da++}</a></li>`;
			}else{
			tampungSide[0] += `
				<li class="page-item active"><a href="#" class="page-link" id="paginations" val="${da}">0${da++}</a></li>

				`;}
			}
			tampungSide[0] += `
				<li class="page-item">
				    <a href="#" class="page-link" aria-label="Next">
					<span aria-hidden="true">
					    <span class="lnr lnr-chevron-right"></span>
					</span>
				    </a>
				</li>
			    </ul>
			</nav>`;
			// console.log(tampungSide[0]);
			

			$("#ejournalTampil").html(tampungSide[0]);

			

			$('a[id="paginations"]').click(function() {
				event.preventDefault();

				// console.log('masuk');
				
				// var key = $(this).data('key');
				var val = $(this).attr("val");
				val--;
				tampungSide[val] += `</div>
				<nav class="blog-pagination justify-content-center d-flex">
				<ul class="pagination">
					<li class="page-item disabled">
					<a href="#" class="page-link" aria-label="Previous">
						<span aria-hidden="true">
						<span class="lnr lnr-chevron-left"></span>
						</span>
					</a>
					</li>
					`;

					var da = 1;
					
				for(i=0;i<=t;i++){
					// console.log(t);
	//				<li class="page-item"><a href="#" class="page-link">02</a></li>
					if(da != val+1){
						tampungSide[val] += `
						
						<li class="page-item"><a href="#" class="page-link" id="paginations" val="${da}">0${da++}</a></li>`;
					}else{
					tampungSide[val] += `
						<li class="page-item active"><a href="#" class="page-link" id="paginations" val="${da}">0${da++}</a></li>

						`;}
				}
				tampungSide[val] += `
					<li class="page-item">
					<a href="#" class="page-link" aria-label="Next">
						<span aria-hidden="true">
						<span class="lnr lnr-chevron-right"></span>
						</span>
					</a>
					</li>
				</ul>
				</nav>`;
				// console.log(tampungSide[0]);
			

				$("#ejournalTampil").html(tampungSide[val]);



					return false;

			      });


			// $('#ejournalTampil').pagination({
			// 	dataSource: [1, 2, 3, 4, 5, 7],
			// 	pageSize: 8,
			// 	formatResult: function(data) {
			// 	    var result = [];
			// 	    for (var i = 0, len = data.length; i < len; i++) {
			// 		result.push(data[i] + ' - good guys');
			// 	    }
			// 	    return result;
			// 	},
			// 	callback: function(data, pagination) {
			// 	    // template method of yourself
			// 	    var html = template(data);
			// 	    dataContainer.html(html);
			// 	}
			//     })
			
			

		
			$('#searchJournal').change(function(){
				// var idd = this.getAttribute('searchJournal');
				// var idd = $(this).attr("searchJournal");
				// console.log(idd);
				var idd = $("#searchJournal").val();
				// console.log(idd);
								
				$.ajax({
					url: `${apiurl}/repodoc/search/${idd}`,
					type: 'GET',
					dataType: 'json',
					contentType: 'application/json; charset=utf-8',
					success: function (response) {
						if(response.Status=="Success"){

							var sideJournal = `` ;
							var i = 0;
							for(i=0;i<response.data.length;i++){
							var jud = response.data[i].judul;
							var auth = response.data[i].author;
							var tahu = response.data[i].tahun;
							var abs = response.data[i].abstrak;
							var path = response.data[i].path;
							var nam = response.data[i].nama;
							var dos = response.data[i].id_dosen;
							sideJournal += `
							<div class="single-post-list d-flex flex-row align-items-center">
							<div class="details">
							<a id="viewJ" href="#tampliEjournale" dos="${dos}" jud="${jud}" auth="${auth}" tahu="${tahu}" abs="${abs}" path="${path}" nam="${nam}">
								<h6>${response.data[i].judul}</h6>
							</a>
							<p class="font-weight-bold">Authors : ${response.data[i].author}</p>
							<p>${response.data[i].tahun} </p>
							</div>
							</div>
							`;
			
								
			
						}sideJournal += `</div>`;
						$("#ejournalTampil").html(sideJournal);
					}
				}


				});	
			});

			$('#sumbitHome').change(function(){
				// var idd = this.getAttribute('searchJournal');
				// var idd = $(this).attr("searchJournal");
				// console.log(idd);
				var idd = $("#homeSearch").val();
				console.log(idd);
								
				$.ajax({
					url: `${apiurl}/repodoc/search/${idd}`,
					type: 'GET',
					dataType: 'json',
					contentType: 'application/json; charset=utf-8',
					success: function (response) {
						if(response.Status=="Success"){

							var sideJournal = `` ;
							var i = 0;
							for(i=0;i<response.data.length;i++){
							var jud = response.data[i].judul;
							var auth = response.data[i].author;
							var tahu = response.data[i].tahun;
							var abs = response.data[i].abstrak;
							var path = response.data[i].path;
							var nam = response.data[i].nama;
							var dos = response.data[i].id_dosen;
							sideJournal += `
							<div class="single-post-list d-flex flex-row align-items-center">
							<div class="details">
							<a id="viewJ" href="#tampliEjournale" dos="${dos}" jud="${jud}" auth="${auth}" tahu="${tahu}" abs="${abs}" path="${path}" nam="${nam}">
								<h6>${response.data[i].judul}</h6>
							</a>
							<p class="font-weight-bold">Authors : ${response.data[i].author}</p>
							<p>${response.data[i].tahun} </p>
							</div>
							</div>
							`;
			
								
			
						}

						$("#ejournalTampil").html(sideJournal);
					}
				}


				});		
			});

			// if(document.getElementById("a.viewJ")!=null){
				//ADMIN Upload_Journal
				// document.getElementById("a.viewJ").addEventListener("click", function (event) {
				$('a[id="viewJ"]').click(function() {
				event.preventDefault();
					
				// console.log('masuk');
				
				// var key = $(this).data('key');
				var jud = $(this).attr("jud");
				var auth = $(this).attr("auth");
				var tahu = $(this).attr("tahu");
				var abs = $(this).attr("abs");
				var path = $(this).attr("path");
				var nam = $(this).attr("nam");
				var dos = $(this).attr("dos");


				if(dos != 1){
					var tampilan = `
					<div class="col-md-12">
					<h4 class="text-heading">${jud}</h4>
					</div>
					<div class="col-md-12">
					<p>Authors : ${auth}
					<br>
					Tahun : ${tahu}
					</p>
					</div>
					<div class="card-body">
					<h6 class="text-heading text-center">Abstrak</h6>
					<p class="text-dark">${abs}</p>
					</div>
					<div class="embed-responsive embed-responsive-1by1">
					<iframe class="" src="${path}" width="100%" height="1000px"></iframe>
					</div>
					<div class="card-body">
					<p>Publisher : ${nam}</p>
					</div>
					`;

					$("#tampilEjournal").html(tampilan);
				}

				if(dos == 1){
					var tampilan = `
					<div class="col-md-12">
					<h4 class="text-heading">${jud}</h4>
					</div>
					<div class="col-md-12">
					<p>Authors : ${auth}
					    <br>
					    Tahun : ${tahu}
					</p>
					</div>
					<div class="card-body">
					    <h6 class="text-heading text-center">Abstrak</h6>
					    <p class="text-dark">${abs}</p>
					</div>
					<div class="embed-responsive embed-responsive-1by1">
					    <iframe class="" src="../repoAdmin/assets/${path}" width="100%" height="1000px"></iframe>
					</div>
					<div class="card-body">
					    <p>Publisher : ${nam}</p>
					</div>
					`;
	
					$("#tampilEjournal").html(tampilan);
					}


					return false;

			      });
		
		}
	

	});
		

	


});
