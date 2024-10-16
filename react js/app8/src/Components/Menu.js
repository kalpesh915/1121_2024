import { Link } from "react-router-dom";
import './style.css';

function Menu() {
    return <><nav>
        <ul>
            {/* <a href='/'>Home</a> */}
            <li><Link className="nav-Link" to="/">Home</Link></li>
            <li><Link className="nav-Link" to="/about">About</Link></li>
            <li><Link className="nav-Link" to="/services">Services</Link></li>
            <li><Link className="nav-Link" to="/feedback">Feedback</Link></li>
            <li><Link className="nav-Link" to="/contact">Contact</Link></li>
        </ul>
    </nav>
    </>
}
export default Menu;