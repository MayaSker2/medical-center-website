import profile from "../../assets/Images/home/profile.svg"
import notification from "../../assets/Images/home/notification.svg"
import doctor from "../../assets/Images/home/doctor.svg"
import favourite from "../../assets/Images/home/favourite.svg"
import settings from "../../assets/Images/home/settings.svg"
import {  Link } from "react-router-dom";
import { FaSearch, FaTimes } from 'react-icons/fa';
import search from "../../assets/Images/home/search.svg"
import filter from "../../assets/Images/home/filter.svg"


export default function Section1(){
    return<>
   <div className="mt-14 font-league  ">
        <div className="flex justify-between mb-6 px-8 ">
          <div className="flex gap-4 items-center">
             <img className="w-10"  src={profile} />
             <div >
             <p className=" text-xs text-[#2260FF] font-light">Hi, WelcomeBack</p>
             <p className="font-normal text-sm text-black">John Doe</p>
             </div>
        </div>
        <div className="flex gap-1"> 
        <img className="bg-[#CAD6FF] rounded-full  p-4"  src={notification} />
        <img className="bg-[#CAD6FF] rounded-full  p-4"  src={settings} /> 
         </div>
       </div>
       <div className="flex items-center gap-1  text-[#2260FF]">
        <Link to ="/" className="flex flex-col gap-1 px-8">
        <img className="w-7 " src={doctor} /> 
        <p className="font-light text-xs">Doctors</p>
        </Link >
        <Link to ="/" className="flex flex-col gap-1">
        <img className="w-8 " src={favourite} /> 
        <p className="font-light text-xs ">Favorite</p>
        </Link>
        <div className="relative inline-block">
            <img src={filter} className="absolute left-2 top-1/2 transform -translate-y-1/2  w-9 p-2 rounded-full  bg-white" />
            <input
                type="text"
                className="bg-[#CAD6FF] outline-none w-48 h-10 rounded-3xl pl-12 pr-8" />
            < img src={search} className="absolute right-2 top-1/2 transform -translate-y-1/2 w-4 " />
        </div>

       </div>

      
    </div>
  
    </>
}

