import { Link } from "react-router-dom";
import './style.css';

function Menu() {
    const usersData = [
        {id:1, fname:"Khushbu", lname:"Kaneriya"},
        {id:2, fname:"Kairavi", lname:"Bhatt"},
        {id:3, fname:"Khushi", lname:"Pandya"},
        {id:4, fname:"Kavita", lname:"Parmar"},
        {id:5, fname:"Khevna", lname:"Patel"}
    ];
    return <><nav>
        <ul>
            {
                usersData.map((user) => <li>
                    {/* <Link className="nav-Link" to="/greetings">{user.fname}</Link> */}
                    <Link className="nav-Link" to={"/greetings/"+user.id+"/"+user.fname+"/"+user.lname}>{user.fname}</Link>
                </li>)
            }
            {/* <a href='/'>Home</a> */}
            {/* <li><Link className="nav-Link" to="/">Home</Link></li>
            <li><Link className="nav-Link" to="/about">About</Link></li>
            <li><Link className="nav-Link" to="/services">Services</Link></li>
            <li><Link className="nav-Link" to="/feedback">Feedback</Link></li>
            <li><Link className="nav-Link" to="/contact">Contact</Link></li> */}
        </ul>
    </nav>
    </>
}
export default Menu;