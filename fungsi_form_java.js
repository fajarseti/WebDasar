function setgol(gol)
{
 if(gol=="A")
	{
	 xgaji=1000000;
	}
 else
	{
	 xgaji=750000;
	}
 xpajak=0.1*xgaji;
 xgaber=xgaji-xpajak;
 document.formku.gaji.value=xgaji;
 document.formku.pajak.value=xpajak;
 document.formku.gaber.value=xgaber;
 document.formku.submit.focus(); 
}

function setnilai(nilai)
{
 if(nilai>=85 && nilai<=100)
	{
	 xgrade="A";
	 xket="LULUS";
	}
 else
 if(nilai>=70 && nilai<85)
	{
	 xgrade="B";
	 xket="LULUS";
	}
 else
 if(nilai>=60 && nilai<70)
	{
	 xgrade="C";
	 xket="BERSYARAT";
	}
 else
 if(nilai>=50 && nilai<60)
	{
	 xgrade="D";
	 xket="MENGULANG";
	}
 else
	{
	 xgrade="E";
	 xket="MENGULANG";
	}
 if(nilai>100)
	{
	 xgrade=null;
	 xket=null;
	}
 document.formku.grade.value=xgrade;
 document.formku.ket.value=xket;
 document.formku.submit.focus();
}