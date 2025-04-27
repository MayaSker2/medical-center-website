import line from "../../assets/Images/home/line.svg"
import { MdDone } from "react-icons/md";
import { IoClose } from "react-icons/io5";
export default function section2(){
    return<>
    <div className="bg-[#CAD6FF] pb-16 font-league">
       <div className=" my-4 w-full flex gap-3  py-4 px-7">
        <div className="bg-white rounded-3xl w-12 h-16 text-center">
        <p className="font-medium text-2xl">9</p>
        <p className="font-light text-xs">MON</p>
        </div>
        <div className="bg-white rounded-3xl w-12 h-16 text-center">
        <p className="font-medium text-2xl">10</p>
        <p className="font-light text-xs">TUE</p>
        </div>
        <div className="bg-[#2260FF] rounded-3xl w-12 h-16 text-center text-[#FFFFFF]">
        <p className="font-medium text- text-2xl">11</p>
        <p className="font-light text-xs">WED</p>
        </div>
        <div className="bg-white rounded-3xl w-12 h-16 text-center ">
        <p className="font-medium text- text-2xl">12</p>
        <p className="font-light text-xs">THU</p>
        </div>
        <div className="bg-[#2260FF] rounded-3xl w-12 h-16 text-center text-[#FFFFFF]">
        <p className="font-medium text- text-2xl">13</p>
        <p className="font-light text-xs">FRI</p>
        </div>
        <div className="bg-[#2260FF] rounded-3xl w-12 h-16  text-center text-[#FFFFFF]">
        <p className="font-medium text- text-2xl">14</p>
        <p className="font-light text-xs">SAT</p>
        </div>
       
       </div>
       <div className="px-5 bg-white rounded-3xl py-4 mx-auto w-80" >
          <p className="text-right text-[#2260FF] text-xs font-normal">11 Wednesday - Today</p>
          <div className="flex gap-1  ">
              <p className="text-[#2260FF] text-xs font-light ">9 AM</p>
              <img src={line}/>
          </div>
          <div className="flex gap-1">
            <div className="w-14">
            <p className="text-[#2260FF] text-xs font-light my-2" >10 AM</p>
            <p className="text-[#2260FF] text-xs font-light">11 AM</p>
            </div>
            <div className="bg-[#CAD6FF] rounded-xl px-3 pt-2">
                <div className="flex justify-between">
                    <p className="text-[#2260FF] text-xs font-medium">Dr. Olivia Turner, M.D.</p>
                    <div className="flex gap-1">
                       <MdDone className="bg-white text-[#2260FF] w-4 rounded-full flex items-center justify-center" />
                       <IoClose className="bg-white text-[#2260FF] w-4 rounded-full flex items-center justify-center" />

                    </div>
                </div>
                <p className="font-light text-xs my-1">Treatment and prevention of skin and photodermatitis.</p>
            </div>

          </div>
          <div className="flex gap-1">
              <p className="text-[#2260FF] text-xs font-light">12 AM</p>
              <img src={line}/>
          </div>
          
       </div>
       </div>
    </>
}