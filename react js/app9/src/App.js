import { BrowserRouter, Route, Routes } from "react-router-dom";
import Menu from "./Components/Menu";
import Home from "./Components/Home";
import Product from "./Components/Product";

function App() {
  return (
    <div className="container-fluid">
      <BrowserRouter>
        <Menu></Menu>
        <Routes>
          <Route path="/" element={<Home></Home>}></Route>
          <Route path="/productdetail/:id" element={<Product></Product>}></Route>
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
