import DoctorNavbar from "../../Components/DoctorNavbar"
import doctor2 from "../../assets/Images/home/doctor2.svg"
import certifica from "../../assets/Images/Doctors/certifica.svg"
import { LiaCertificateSolid } from "react-icons/lia";
import { FaStar } from "react-icons/fa";
import { FaRegStar } from "react-icons/fa";
import { LuMessageCircleMore } from "react-icons/lu";
import { IoAlarmOutline } from "react-icons/io5";
import { AiOutlineInfo } from "react-icons/ai";
import { SlCalender } from "react-icons/sl";
import { AiOutlineQuestion } from "react-icons/ai";
import { MdFavoriteBorder } from "react-icons/md";
import {  Link } from "react-router-dom";
import Footer from "../../Components/Footer"
export default function DoctorInfo(){
    return<>
    <div>
            <DoctorNavbar title="Doctor Info" />
           
        </div>
    <div className="mx-8 bg-[#CAD6FF] rounded-2xl max-w-96 mt-4 font-league py-4 ">
        <div className="flex items-start justify-center gap-2">
            <img className="w-36 rounded-full" src={doctor2}/>
            <div>
                <div className=" bg-[#2260FF] p-1 flex rounded-2xl w-32 gap-1 ">

                <div className="bg-[#CAD6FF] rounded-full p-2 flex items-center justify-center hover:bg-[#91aef8]">
              <img src={certifica} className="w-4 h-4" />
          </div>
                    <div>
                    <p className="font-normal text-xs text-white">15 years </p>
                    <p className="text-white font-light text-xs">experience</p>
                    </div>
                </div>
                <div className="bg-[#2260FF] rounded-2xl w-32 py-3 px-2 mt-1">
                <p className="text-white text-xs font-semibold">Focus: <span className="font-light">The impact of hormonal imbalances on skin conditions, 
                    specializing in acne, hirsutism, and other skin disorders.</span></p> 

                </div>


            </div>
        </div>
        <div className="mx-8 bg-white rounded-xl text-center mt-4">
            <p className="text-[#2260FF] font-medium text-base pt-2">Dr. Alexander Bennett, Ph.D.</p>
            <p className="font-light text-xs">Dermato-Genetics</p>
        </div>
        <div className="flex gap-2 mx-8">
             <div className="flex text-[#2260FF] font-light text-xs bg-white rounded-xl w-11 items-start justify-center gap-1 mt-2 py-1 pl-1 pr-2 h-5">
                <FaStar /> <span>5</span>
            </div>
        <div className="flex text-[#2260FF] font-light text-xs bg-white rounded-xl w-11  items-start justify-center gap-1 mt-2 py-1 pl-1 pr-2 h-5">
          <LuMessageCircleMore /> <span >40</span>
        </div>
        <div className="flex text-[#2260FF] bg-white rounded-xl   items-center justify-center gap-2 mt-2 py-1 pl-1 pr-2">
        <IoAlarmOutline /> <span className="font-light text-xs text-[#2260FF]">Mon-Sat / 9:00AM - 5:00PM</span>
        </div>
       
         </div>
         <div className=" flex justify-between mx-8 mt-3 items-start ">
           < Link to ="/"className="bg-[#2260FF]  rounded-xl flex justify-center items-center w-24 p-2   gap-2">
              < SlCalender className="text-white" /> <span className="text-white text-xs font-light">Schedule</span>
           </Link>
           <div className="flex gap-1 ">
                               <Link to="/" className="bg-white rounded-full p-2 flex items-center justify-center text-[#2260FF] hover:bg-[#91aef8]"> <AiOutlineInfo /></Link>
                                <Link to="/" className="bg-white rounded-full p-2 flex items-center justify-center text-[#2260FF] hover:bg-[#91aef8]"><AiOutlineQuestion/></Link>
                                <Link to="/" className="bg-white rounded-full p-2 flex items-center justify-center text-[#2260FF] hover:bg-[#91aef8]"><FaRegStar /></Link>
                                <Link to="/" className="bg-white rounded-full p-2 flex items-center justify-center text-[#2260FF] hover:bg-[#91aef8]"><MdFavoriteBorder/></Link>  
                            </div>
       </div>
    </div>
    {/** Info */}
    <div className="mx-8 mt-8">
            <div>
                <p className="font-medium text-sm text-[#2260FF]">Profile</p>
                <p className="font-light text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                     laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div> 
                <div className="my-5">
                <p className="font-medium text-sm text-[#2260FF]">Career path</p>
                <p className="font-light text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div> 
                <div className="mb-9">
                <p className="font-medium text-sm text-[#2260FF]">Highlights</p>
                <p className="font-light text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div> 

        </div>
        <Footer/>
    </>
}