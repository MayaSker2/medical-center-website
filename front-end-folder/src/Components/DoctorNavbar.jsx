import { FaChevronLeft } from "react-icons/fa6";
import search from "../assets/Images/home/search.svg";
import filterblue from "../assets/Images/Doctors/filterblue.svg";
import { Link } from "react-router-dom";
import { FaLongArrowAltRight } from "react-icons/fa";
import star from "../assets/Images/Doctors/star.svg";
import favourite from "../assets/Images/home/favourite.svg";
import arrowbottom from "../assets/Images/Doctors/arrowbottom.svg";
import arrowtop from "../assets/Images/Doctors/arrowtop.svg";

export default function DoctorNavbar({ title }) {
    return (
        <>
            <div className="font-league mt-9 pl-8">
                <div className="flex justify-evenly text-[#2260FF] items-center mb-5">
                    <Link><FaChevronLeft /></Link>
                    <p className="font-semibold text-2xl">{title}</p>
                    <div className="flex gap-1"> 
                        <Link className="bg-[#CAD6FF] rounded-full p-3 flex items-center justify-center hover:bg-[#91aef8]">
                            <img src={search} className="w-4 h-4" alt="Search" />
                        </Link>
                        <Link className="bg-[#CAD6FF] rounded-full p-3 flex items-center justify-center hover:bg-[#91aef8]">
                            <img src={filterblue} className="w-4 h-4" alt="Filter" />
                        </Link>
                    </div>
                </div>
                <div className="flex gap-1 items-center pl-8">
                    <p className="font-light text-xs text-[#070707]">Sort By</p>
                    <Link className="flex items-center justify-center bg-[#2260FF] rounded-xl py-1 px-2 text-white font-medium text-xs">A <FaLongArrowAltRight /> Z</Link>
                    <Link className="bg-[#CAD6FF] rounded-full p-2 flex items-center justify-center hover:bg-[#91aef8]">
                        <img src={star} className="w-4 h-4" alt="Star" />
                    </Link>
                    <Link className="bg-[#CAD6FF] rounded-full p-2 flex items-center justify-center hover:bg-[#91aef8]">
                        <img src={favourite} className="w-4 h-4" alt="Favourite" />
                    </Link>
                    <Link to="/femal-doctor" className="bg-[#CAD6FF] rounded-full p-2 flex items-center justify-center hover:bg-[#91aef8]">
                        <img src={arrowbottom} className="w-4 h-4" alt="Arrow Bottom" />
                    </Link>
                    <Link to="/male-doctor" className="bg-[#CAD6FF] rounded-full p-2 flex items-center justify-center hover:bg-[#91aef8]">
                        <img src={arrowtop} className="w-4 h-4" alt="Arrow Top" />
                    </Link>
                </div>
            </div>
        </>
    );
}
