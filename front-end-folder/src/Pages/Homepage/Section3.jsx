import doctor1 from "../../assets/Images/home/doctor1.svg"
import doctor2 from "../../assets/Images/home/doctor2.svg"
import doctor3 from "../../assets/Images/home/doctor3.svg"
import doctor4 from "../../assets/Images/home/doctor4.svg"

import { FaStar } from "react-icons/fa";
import { LuMessageCircleMore } from "react-icons/lu";
import { AiOutlineQuestion } from "react-icons/ai";
import { MdFavoriteBorder } from "react-icons/md";
const doctors = [
    {
        name: "Dr. Olivia Turner, M.D.",
        specialty: "Dermato-Endocrinology",
        rating: 5,
        messages: 60,
        image: doctor1
    },
    {
        name: "Dr. Alexander Bennett,Ph.D.",
        specialty: "Dermato-Genetics",
        rating: 4.5,
        messages: 40,
        image: doctor2 
    },
    {
        name: "Dr. Sophia Martinez, Ph.D.",
        specialty: "Cosmetic Bioengineering",
        rating: 5,
        messages: 150,
        image: doctor3
    },
    {
        name: "Dr. Michael Davidson, M.D.",
        specialty: "Nano-Dermatology",
        rating: 4.8,
        messages: 90,
        image: doctor4 
    }
];
export default function Section3(){
    return<>
    <div className="py-4 px-8 font-league">
                {doctors.map((doctor, index) => (
                    <div key={index} className="flex items-start bg-[#CAD6FF] rounded-2xl max-w-96  py-2 px-3 gap-2 mb-4">
                        <img className="h-16 w-16" src={doctor.image} alt={doctor.name} />
                        <div>
                            <div className="bg-white rounded-xl py-2 px-4 w-52">
                                <p className="text-[#2260FF] font-medium text-sm">{doctor.name}</p>
                                <p className="font-light text-xs">{doctor.specialty}</p>
                            </div>
                            <div className="flex justify-between items-center">
                                <div className="flex gap-2">
                                    <div className="flex text-[#2260FF] bg-white rounded-xl w-16 items-center gap-2 mt-2 py-1 pl-1 pr-2">
                                        <FaStar /> <span>{doctor.rating}</span>
                                    </div>
                                    <div className="flex text-[#2260FF] bg-white rounded-xl w-16 items-center justify-center gap-2 mt-2 py-1 pl-1 pr-2">
                                        <LuMessageCircleMore /> <span>{doctor.messages}</span>
                                    </div>
                                </div>
                                <div className="flex gap-1 items-center">
                                    <AiOutlineQuestion className="text-[#2260FF] bg-white rounded-full" />
                                    <MdFavoriteBorder className="text-[#2260FF] bg-white rounded-full" />
                                </div>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
    </>
}