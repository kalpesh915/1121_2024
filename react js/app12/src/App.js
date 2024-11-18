import StudentAPI from "./Components/StudentAPI";
import Login from "./Components/Login";
import { BrowserRouter, Routes, Route, Link, Router } from "react-router-dom";
function App() {
  return (
    <div>
      <BrowserRouter>

      <Routes>
        <Route path="/" element={<Login></Login>}></Route>
        <Route path="/data" element={<StudentAPI></StudentAPI>}></Route>
      </Routes>
      
      </BrowserRouter>
    </div>
  );
}

export default App;
