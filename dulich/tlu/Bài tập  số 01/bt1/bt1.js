document.addEventListener('DOMContentLoaded', function() {

	//phan code hiện nội dung ABCD
	var nutA = document.querySelector('.nut-a');
	var dapAnA = document.querySelector('.a');
	nutA.addEventListener('click', function(){
		dapAnA.classList.add('show');
	});
	var nutB = document.querySelector('.nut-b');
	var dapAnB = document.querySelector('.b');
	nutB.addEventListener('click', function(){
		dapAnB.classList.add('show');
	});
	var nutC = document.querySelector('.nut-c');
	var dapAnC = document.querySelector('.c');
	nutC.addEventListener('click', function(){
		dapAnC.classList.add('show');
	});
	var nutD = document.querySelector('.nut-d');
	var dapAnD = document.querySelector('.d');
	nutD.addEventListener('click', function(){
		dapAnD.classList.add('show');
	});
	
	//Phần check đáp án

	var arrDapAn = ['d','b','b','b','c','b','c','b','d'];

	var soThuTu = document.querySelector('.so-thu-tu');
		soThuTu = soThuTu.innerHTML;

	var nutCheck = document.querySelector('.nut-check');
	nutCheck.addEventListener('click', function(){
		var dapAnDung = '.' + arrDapAn[soThuTu-1];
		console.log(dapAnDung);

		switch (dapAnDung) {
			case '.a':
				dapAnA.classList.add('dap-an-dung');
				break;

			case '.b':
				dapAnB.classList.add('dap-an-dung');
				break;

			case '.c':
				dapAnC.classList.add('dap-an-dung');
				break;

			case '.d':
				dapAnD.classList.add('dap-an-dung');
				break;
			default:
				break;
		}
	});

	var clock = document.querySelector('#clock');
	var nutBamGio = document.querySelector('.nut-h');
	nutBamGio.addEventListener('click', function() {
		var x = 5;
        function demNguoc(){
            
            if(x>-1){
            	clock.innerHTML = x--;
            	setTimeout(demNguoc, 1000);
            }
        }
        demNguoc();
        clock.classList.add('show');

		setTimeout(function(){
			clock.classList.remove('show');
		}, 10000);
	});
},false)