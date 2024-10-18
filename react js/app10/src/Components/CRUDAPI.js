function CRUDAPI() {

    const APIURL = "http://localhost:3000/students";

    function addNewData() {
        let fname = prompt("Enter First Name");
        let lname = prompt("Enter Last Name");
        let city = prompt("Enter City Name");


        fetch(APIURL, {
            method: "POST",
            headers: {
                "Content-Type": "Application/json",
                "Accept": "Application/json"
            }, body: JSON.stringify({ fname, lname, city })
        }).then((response) => {
            response.json().then((result) => {
                console.log(result);
            })
        });
    }

    function getAllData() {
        // Default HTTP method is GET
        fetch(APIURL).then((response) => {
            response.json().then((result) => {
                console.log(result);
            })
        })
    }

    function getDataByID() {
        let id = prompt("Enter ID for Search Data")
        fetch(APIURL + "/" + id).then((response) => {
            //console.log(response);
            response.json().then((result)=>{
                console.log(result);
            })
        });
    }

    function updateData(){
        let id = prompt("Enter ID for Search Data");
        let fname = prompt("Enter First Name");
        let lname = prompt("Enter Last Name");
        let city = prompt("Enter City Name");

        fetch(APIURL+"/"+id,{
            method: "PUT",
            headers:{
                "Content-Type": "Application/json",
                "Accept": "Application/json"
            },body: JSON.stringify({fname, lname, city})
        }).then((response)=>{
            response.json().then((result)=>{
                console.log(result);
            })
        })
    }

    function deleteData(){
        let id = prompt("Enter ID for Search Data");
        fetch(APIURL+"/"+id, {
            method: "DELETE"
        }).then((response)=>{
            response.json().then((result)=>{
                console.log(result);
            })
        })
    }

    return <>
        <button onClick={() => addNewData()}>Add New Data</button>
        <button onClick={() => getAllData()}>Get All Data</button>
        <button onClick={() => getDataByID()}>Get Data by ID</button>
        <button onClick={() => updateData()}>Update Data</button>
        <button onClick={() => deleteData()}>Delete Data</button>
    </>
}

export default CRUDAPI;