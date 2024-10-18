import { useState, useEffect } from "react";

function CRUDAPI1() {

    const APIURL = "http://localhost:3000/students/";

    let [sid, setSid] = useState(0);
    let [fname, setFname] = useState("");
    let [lname, setLname] = useState("");
    let [city, setCity] = useState("");
    let [email, setEmail] = useState("");
    let [phone, setPhone] = useState("");
    let [gender, setGender] = useState("");
    let [status, setStatus] = useState(true);
    let [loading, setLoading] = useState(true);
    let [studentsData, setStudentsData] = useState([]);

    function resetForm() {
        setSid("");
        setFname("");
        setLname("");
        setCity("");
        setEmail("");
        setPhone("");
        setGender("");
        setStatus(true);
        setLoading(true);
    }

    useEffect(()=>{
        loadAllStudentsData();
    }, []);

    function loadAllStudentsData() {
        fetch(APIURL).then((response) => {
            response.json().then((result) => {
                setLoading(false);
                setStudentsData(result);
                //console.log(result);
            })
        });
    }

    function handleSubmit(e){
        e.preventDefault();

        if(status){
            // add new student
            fetch(APIURL,{
                method: "POST",
                headers: {
                    "Accept": "Application/json",
                    "Content-Type": "Application/json"
                },
                body: JSON.stringify({fname, lname, city, email, phone, gender})
            }).then((response)=>{
                response.json().then((result)=>{
                    setLoading(true);
                    resetForm();
                    loadAllStudentsData();
                });
            })
        }else{
            // update student
        }
    }

    return <>
        <div className="container-fluid">
            <h1 className="bg-primary text-white text-center p-2">CRUD API with JSON-Server</h1>

            <div className="row">
                <div className="col-md-3">
                    <form onSubmit={handleSubmit}>
                        <div className="my-2 form-floating">
                            <input type="text" name="fname" id="fname" required className="form-control" placeholder="Enter First Name" onChange={(e) => setFname(e.target.value)} value={fname}></input>
                            <label className="form-label" htmlFor="fname">Enter First Name</label>
                        </div>
                        <div className="my-2 form-floating">
                            <input type="text" name="lname" id="lname" required className="form-control" placeholder="Enter Last Name" onChange={(e) => setLname(e.target.value)} value={lname}></input>
                            <label className="form-label" htmlFor="lname">Enter Last Name</label>
                        </div>
                        <div className="my-2 form-floating">
                            <input type="text" name="city" id="city" required className="form-control" placeholder="Enter City Name" onChange={(e) => setCity(e.target.value)} value={city}></input>
                            <label className="form-label" htmlFor="city">Enter City Name</label>
                        </div>
                        <div className="my-2 form-floating">
                            <input type="email" name="email" id="email" required className="form-control" placeholder="Enter Email Address" onChange={(e) => setEmail(e.target.value)} value={email}></input>
                            <label className="form-label" htmlFor="email">Enter Email Address</label>
                        </div>
                        <div className="my-2 form-floating">
                            <input type="text" name="phone" id="phone" required className="form-control" placeholder="Enter Phone Number" onChange={(e) => setPhone(e.target.value)} value={phone} pattern="[0-9]{10,15}"></input>
                            <label className="form-label" htmlFor="phone">Enter Phone Number</label>
                        </div>
                        <div className="my-2 form-floating">
                            <select name="gender" id="gender" required className="form-select" placeholder="Select Gender" onChange={(e) => setGender(e.target.value)} value={gender}>
                                <option></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label className="form-label" htmlFor="gender">Select Gender</label>
                        </div>
                        <div className="my-2">
                            <input type="submit" value={status ? "Add New Student" : "Update Student"} className="btn btn-primary mx-2"></input>
                            <input type="reset" className="btn btn-danger" onClick={() => resetForm()}></input>
                        </div>
                    </form>
                </div>
                <div className="col-md-9">
                    {
                        loading ? <><span className="spinner-border spinner-border-sm mx-3"></span>Loading...</> : ""
                    }
                    <div className="table-responsive">
                        <table className="table table-hover table-striped">

                            <thead className="table-dark">
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
                                    studentsData.map((student, key)=> <tr key={key}>
                                        <td>{student.id}</td>
                                        <td>{student.fname}</td>
                                        <td>{student.lname}</td>
                                        <td>{student.city}</td>
                                        <td>{student.email}</td>
                                        <td>{student.phone}</td>
                                        <td>{student.gender}</td>
                                        <td>
                                            <button type="button" className="btn btn-danger"><i className="fa fa-trash"></i></button>
                                            <button type="button" className="btn btn-primary mx-2">
                                                <i className="fa fa-pen"></i>
                                            </button>
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

export default CRUDAPI1;