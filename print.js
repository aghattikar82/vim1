 function PrintElem()
{
    elem="prnt";
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');
    mywindow.document.write(document.getElementById(elem).innerHTML);
    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/
    mywindow.print();
	mywindow.close();
}
// JavaScript Document