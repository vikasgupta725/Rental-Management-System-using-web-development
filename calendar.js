var dt= new Date();

function RenderDate()
{
dt.setDate(1);	
var day= dt.getDay();
console.log(dt.getDay());
var enddate= new Date(dt.getFullYear(),dt.getMonth()+1,0).getDate();
var prevdate= new Date(dt.getFullYear(),dt.getMonth(),0).getDate();
var today=new Date();
console.log(today);
console.log(enddate);
var months=["January","February","March","April","May","June","July","August","September","October","November","December"];
document.getElementById("month").innerHTML=months[dt.getMonth()];
document.getElementById("date_str").innerHTML=dt.toDateString();
var cells="";
for(x=day;x>0;x--)
{
	cells+="<div class='pre_date'>"+(prevdate-x+1)+"</div>"
}
for(i=1;i<=enddate;i++)
{
	if(i==today.getDate() && dt.getMonth()==today.getMonth())
	{
		cells+="<div class='today'>"+i+"</div>";
	}
	else
	{
		cells+="<div>"+i+"</div>";
	}
}
document.getElementsByClassName("days")[0].innerHTML=cells;
}

function moveDate(para)
{
	if(para=='prev')
	{
		dt.setMonth(dt.getMonth()-1);
		RenderDate();
	}
	else if(para=='next')
	{
		dt.setMonth(dt.getMonth()+1);
		RenderDate();
	}
}