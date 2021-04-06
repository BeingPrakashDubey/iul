$(document).ready(function(){
   $.ajax({
      url: 'http://homeofbulldogs.com/dev/insurance-csv/get_data.php',
      type : 'GET',
      success:function(data){
          $('#data_from_server').html(data);
      }
   });  
});
    let selectedFile;
//console.log(window.XLSX);
document.getElementById('input').addEventListener("change", (event) => {
    selectedFile = event.target.files[0];
})

let data=[{"name":"jayanth"}];


document.getElementById('button').addEventListener("click", () => {
    var xl_data = [];
    //XLSX.utils.json_to_sheet(data, 'http://localhost/excel/out.xlsx');
    if(selectedFile){
        let fileReader = new FileReader();
        fileReader.readAsBinaryString(selectedFile);
        fileReader.onload = (event)=>{
            let data = event.target.result;
            let workbook = XLSX.read(data,{type:"binary"});
            // console.log(workbook);
            workbook.SheetNames.forEach(sheet => {
                let rowObject = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheet]);
                // console.log(rowObject);
                var myjson = JSON.stringify(rowObject,undefined,4);
                // console.log(myjson[0]);
                $.ajax({
                    url: 'http://homeofbulldogs.com/dev/insurance-csv/jsonfile.php',
                    type: "POST",
                    data: {
                        listdata: myjson
                    },
                    success: function (data) { 

                        console.log(data);
                        //alert(data);
                        location.reload();
                        return true;
                    }
                });
               
            });
        }
    }
});