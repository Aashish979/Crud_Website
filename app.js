// POST....

    function POST()
    {

        let Fname = document.getElementById("fname").value;
        let Lname = document.getElementById("lname").value;
        let Gmail = document.getElementById("gmail").value;
        let Gender = document.getElementById("gender").value;
        let Mobile = document.getElementById("mobile").value;
        let msg = document.getElementById("msg");
        event.preventDefault();

    //POST...
    let xhr = new XMLHttpRequest();

    xhr.open("POST","insert.php", true);
    xhr.setRequestHeader('Content-type' , 'application/x-www-form-urlencoded');
    xhr.send("Fname="+Fname+"&Lname="+Lname+"&Gmail="+Gmail+"&Gender="+Gender+"&Mobile="+Mobile);

    xhr.onload = () => {
        if(xhr.status == 200)
        {
            if (xhr.responseText == 1)
            {
                msg.innerHTML = "Record Inserted Successfully";
                msg.setAttribute("class"," alert alert-success");
                $("#add-employee-modal").modal('hide');
                GET();
                document.getElementById("add-employee-form").reset();


            } 


        }
    };
}


//GET...
GET();
function GET()
{
    //POST...
    let xhr = new XMLHttpRequest();

    xhr.open("GET","display.php", true);
    xhr.send();

    xhr.onload = () => {
        if(xhr.status == 200)
        {
           let data =JSON.parse(xhr.responseText);
           document.getElementById("table-body").innerHTML = Table(data);


       }
   };
}

function Table(data)
{

    var records = "";
    if(data.length>0)
    { 

        for(var j=0 ; j<data.length; j++)
        {
            var cols = Object.keys(data[0]);
            records += "<tr>";

           for(var k=0 ; k<cols.length; k++)
            {
           
            
            records += "<td>"+data[j][cols[k]]+"</td>";
            
             }

            records += "<td><button class='btn btn-sm btn-primary' onclick='getData("+data[j].id+")' data-toggle='modal' data-target='#update-employee-modal'> Update</button><button class='btn btn-sm btn-danger' onclick='DELETE("+data[j].id+")'> Delete</button></td>"
            records += "</tr>";
           }


       }
    else
    {
        records += "<td class='alert alert-danger'>Ooops..!! No Records found.</td>";
    }

    return records;
}





//update..

//Get data.......

function getData(id)
{
    //POST...
    let xhr = new XMLHttpRequest();

    xhr.open("GET","getData.php?empId="+id, true);
    xhr.send();

    xhr.onload = () => {
        if(xhr.status == 200)
        {

            let data = JSON.parse(xhr.responseText);
            // console.log(data);
            document.getElementById("upd-first-name").value = data.Fname;
            document.getElementById("upd-last-name").value = data.Lname;
            document.getElementById("upd-email").value = data.Gmail; 
            document.getElementById("upd-gender").value = data.Gender;
            document.getElementById("upd-mobile").value = data.Mobile;
            document.getElementById("userId").value = data.id;
            
        }
    };
}


//Update...

function UPDATE()
{
    event.preventDefault();
    let upd_fname = document.getElementById("upd-first-name").value;
    let upd_lname =  document.getElementById("upd-last-name").value;
    let upd_email =document.getElementById("upd-email").value; 
    let upd_gender=document.getElementById("upd-gender").value;
    let upd_mobile =document.getElementById("upd-mobile").value;
    let userId =document.getElementById("userId").value;


    let xhr= new XMLHttpRequest();

    xhr.open("POST" , "update.php" , true);

    xhr.setRequestHeader("Content-type" , 'application/x-www-form-urlencoded');
    //xhr.setRequestHeader("Content-type" , 'application/json');

    xhr.send("userId="+userId+"&upd_fname="+upd_fname+"&upd_lname="+upd_lname+"&upd_email="+upd_email+"&upd_mobile="+upd_mobile+"&upd_gender="+upd_gender);


//Process the Request..
xhr.onload = () => {
    if(xhr.status==200)
    {

            let msg =document.getElementById('msg');
        
        if(xhr.responseText==1)
        {
            msg.innerHTML ="Record Updated Successfully.";
            msg.setAttribute("class","alert alert-success");
            $('#update-employee-modal').modal('hide');
            GET();
            
        }
        
        
    } 
};

}


//Delete....

function DELETE(id)
{
    let Fname = document.getElementById("fname").value;
    var con = confirm("Are you want to delete your Record?");
    if(con==true)
    {
        var xhr= new XMLHttpRequest();

        xhr.open('POST' , 'delete.php?uid='+id , true);

        xhr.send(); 

        xhr.onload = () => {
            if(xhr.status==200)
            {
                var msg =document.getElementById('msg');

                if(xhr.responseText == 1)
                {
                    msg.innerHTML ="Record Deleted Successfully.";
                    msg.setAttribute("class","alert alert-success mt-3");
                   GET();
                    
                }

            }

        };
    }
}


