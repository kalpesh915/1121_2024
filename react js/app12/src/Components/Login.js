import { useEffect, useState } from "react";
import alertify from 'alertifyjs';
import { useNavigate } from "react-router-dom";

function Login(){

    useEffect(()=>{
        let email = localStorage.getItem("email");
        if (email && email != "") {
            // login
            alertify.error("Login Successfully");
            navigate("/data");
            // logout
            //localStorage.removeItem("email");
        }
    }, []);

    let [email, setEmail] = useState("");
    let [password, setPassword] = useState("");
    let navigate = useNavigate();

    function handleForm(e){
        e.preventDefault();
        //console.log(email, password);
        const APIURL = "http://localhost/myapi/login/";
        
        fetch(APIURL, {
            method:"POST",
            headers: {
                "Content-Type": "Application/json",
                "Accept": "Application/json"
            },
            body: JSON.stringify({email, password})
        }).then((response)=>{
            response.json().then((result)=>{
                if(result.code === 200){
                    alertify.success(result.message); 
                    localStorage.setItem("email", result.email);
                    navigate("/data");
                }else{
                    alertify.error(result.message); 
                }
            })
        })
    }

    return <>
        <h1 className="bg-primary text-white p-3 text-center">Login Form</h1>
        <form onSubmit={handleForm}>
            <div className="my-2 form-floating">
                <input type="email" id="email" name="email" placeholder="Enter Email Address" required className="form-control" onChange={(e)=>setEmail(e.target.value)}></input>
                <label htmlFor="email" className="form-label">Enter Email Address</label>
            </div>

            <div className="my-2 form-floating">
                <input type="password" id="password" name="password" placeholder="Enter Email Password" required className="form-control"onChange={(e)=>setPassword(e.target.value)}></input>
                <label htmlFor="password" className="form-label">Enter Email Password</label>
            </div>

            <div className="my-2">
                <input type="submit" value="Login" className="btn btn-primary"></input>
                <input type="reset" value="Reset" className="btn btn-danger mx-2"></input>
            </div>
        </form>
    </>
}

export default Login;