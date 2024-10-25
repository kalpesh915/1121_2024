import { useContext } from "react";
import { CommonData } from "./CommonContex";
function About() {

    return <>
        <CommonData.Consumer>
            {
                (theme) => <>
                    <h1 style={{backgroundColor: theme.bg, color:theme.fg}}>About Component</h1>
                </>
            }
            
        </CommonData.Consumer>
    </>
}

export default About;