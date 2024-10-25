import alertify from 'alertifyjs';
import { useEffect, useState } from 'react';
import './student.css';

function StudentAPI(){

    const APIURL = "http://localhost/myapi/";

    let [studentID, setStudentID] = useState(0);
    let [fname, setFname] = useState("");
    let [lname, setLname] = useState("");
    let [city, setCity] = useState("");
    let [email, setEmail] = useState("");
    let [phone, setPhone] = useState("");
    let [gender, setGender] = useState("");
    let [action, setAction] = useState(true);
    let [loading, setLoading] = useState(true);
    let [error, setError] = useState("");
    let [studentsData, setStudentsData] = useState([]);

    alertify.set('notifier','position', 'top-right');

    // Function for Handle Form Submit for Insert or Update
    function handleFormSubmit(evt){
        evt.preventDefault();

        if(action){
            // insert
            fetch(APIURL, {
                method:"POST",
                headers: {
                    "Content-Type": "Application/json",
                    "Accept": "Application/json"
                },
                body: JSON.stringify({fname, lname, city, email, phone, gender })
            }).then((response)=>{
                response.json().then((result)=>{
                    //console.log(result);
                    
                    if(result.code === 200){
                        alertify.success(result.message); 
                        loadAllStudentData();
                        resetForm();
                    }else{
                        alertify.error(result.message); 
                    }
                })
            })
        }else{
            // update
            fetch(APIURL+"?id="+studentID, {
                method:"PUT",
                headers:{
                    "Content-Type": "Application/json",
                    "Accept": "Application/json"
                },body: JSON.stringify({fname, lname, city, email, phone, gender})
            }).then((response)=>{
                response.json().then((result)=>{
                    if(result.code === 200){
                        //console.log(result);
                        alertify.success(result.message); 
                        resetForm();
                        setLoading(true);
                        setAction(true);
                        loadAllStudentData();
                    }else{
                        console.log(result);
                        alertify.error(result.message); 
                    }
                });
            })
        }
        
    }


    function loadAllStudentData(){
        fetch(APIURL,{
            method: "GET"
        }).then((response)=>{
            response.json().then((result)=>{
                if(result.code === 200){
                    //console.log(result);
                    setLoading(false);
                    setStudentsData(result.data);
                }
            });
        })
    }

    function deleteStudent(studentId){
        if(window.confirm("Are you sure to delete this data ??")){
            fetch(APIURL+"?id="+studentId,{
                method:"DELETE"
            }).then((response)=>{
                response.json().then((result)=>{
                    //console.log(result);
                    if(result.code === 200){
                        alertify.success(result.message); 
                        setLoading(true);
                        loadAllStudentData();
                    }else{
                        alertify.error(result.message); 
                    }
                })
            });
        }
    }

    function getDataForUpdate(studentId){
        //alert(studentId);

        fetch(APIURL+"?id="+studentId).then((response)=>{
            response.json().then((result)=>{
                //console.log(result);
                if(result.code === 200){
                    setStudentID(result.data.id);
                    setFname(result.data.fname);
                    setLname(result.data.lname);
                    setCity(result.data.city);
                    setEmail(result.data.email);
                    setPhone(result.data.phone);
                    setGender(result.data.gender);
                    setAction(false);
                }else{
                    alertify.error(result.message); 
                }
            });
        })
    }

    useEffect(()=>{
        loadAllStudentData();
    }, []);


    function resetForm(){
        setFname("");
        setLname("");
        setCity("");
        setEmail("");
        setPhone("");
        setGender("");
        setStudentID("");
        setAction(true);
    }

    return <>
        <div className='container-fluid'>
            <h1 className='bg-primary text-white text-center p-2'>Student API Example with PHP MySql</h1>

            <div className='row'>
                <div className='col-md-3'>
                    <form onSubmit={handleFormSubmit}>
                        <div className='my-2 form-floating'>
                            <input type='text' name='fname' id='fname' required placeholder='Enter First Name' className='form-control' onChange={(e)=>setFname(e.target.value)} value={fname}></input>
                            <label className='form-label' htmlFor='fname'>Enter First Name</label>
                        </div>

                        <div className='my-2 form-floating'>
                            <input type='text' name='lname' id='lname' required placeholder='Enter Last Name' className='form-control' onChange={(e)=>setLname(e.target.value)} value={lname}></input>
                            <label className='form-label' htmlFor='lname'>Enter Last Name</label>
                        </div>

                        <div className='my-2 form-floating'>
                            <input type='text' name='city' id='city' required placeholder='Enter City Name' className='form-control' onChange={(e)=>setCity(e.target.value)} value={city}></input>
                            <label className='form-label' htmlFor='city'>Enter City Name</label>
                        </div>

                        <div className='my-2 form-floating'>
                            <input type='email' name='email' id='email' required placeholder='Enter Email Address' className='form-control' onChange={(e)=>setEmail(e.target.value)} value={email}></input>
                            <label className='form-label' htmlFor='email'>Enter Email Address</label>
                        </div>

                        <div className='my-2 form-floating'>
                            <input type='text' name='phone' id='phone' required placeholder='Enter Phone Number' className='form-control' onChange={(e)=>setPhone(e.target.value)} value={phone}></input>
                            <label className='form-label' htmlFor='phone'>Enter Phone Number</label>
                        </div>

                        <div className='my-2 form-floating'>
                            <select name='gender' id='gender' required  className="form-select" placeholder="Select Gender" onChange={(e)=>setGender(e.target.value)} value={gender}>
                                <option></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label className='form-label' htmlFor='gender'>Select Gender</label>
                        </div>

                        <div className='my-2 text-center'>
                            <input type='submit' value={action ? "Add New Student" : "Update Student"} className='btn btn-primary'/>
                            <input type='reset' value="Reset" className='btn btn-danger mx-2' onClick={()=> resetForm()} />
                        </div>
                    </form>
                </div>

                <div className='col-md-9'>
                    {
                        loading ? <p className='text-center'><span className='spinner-border spinner-border-sm'></span> Loading... </p>: ""
                    }
                    <div className='table-responsive'>
                        <table className='table table-hover table-striped'>
                            <thead className='table-dark'>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>City</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                {
                                    studentsData.map((student, key) => <tr key={key}>
                                        <td>{student.id}</td>
                                        <td>{student.fname}</td>
                                        <td>{student.lname}</td>
                                        <td>{student.city}</td>
                                        <td>{student.email}</td>
                                        <td>{student.phone}</td>
                                        <td>{student.gender}</td>
                                        <td>
                                            <button className='btn btn-danger' onClick={()=>{deleteStudent(student.id)}}><i className='fa fa-trash'></i></button>
                                            <button className='btn btn-primary mx-2' onClick={()=>{
                                                getDataForUpdate(student.id)
                                            }}><i className='fa fa-pen'></i></button>
                                        </td>
                                    </tr>)
                                }
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </>
}

export default StudentAPI;