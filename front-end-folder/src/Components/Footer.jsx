import { TiHomeOutline } from "react-icons/ti";
import { FiMessageCircle } from "react-icons/fi";
import { IoPersonOutline } from "react-icons/io5";
import { SlCalender } from "react-icons/sl";
import {  Link } from "react-router-dom";
export default function Footer(){
    return<>
    <div className="mt-2 mx-8 bg-[#2260FF] flex  py-4 max-w-96 justify-evenly rounded-3xl text-white text-2xl ">
   <Link to =""> 
      <TiHomeOutline />
   </Link> 
   <Link to ="">
      <FiMessageCircle />
   </Link>
    <Link to ="">
       <IoPersonOutline />
    </Link>
    <Link to ="">
    <SlCalender /> 
    </Link>
    </div>
    
    </>
}