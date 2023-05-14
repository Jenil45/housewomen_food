<?php
include './sidebar.php';
?>

<div class="flex flex-col gap-[1rem] mt-5 items-center justify-start pt-4 w-[23rem] h-[30rem] border-[2px] border-gray-400 rounded-2xl shadow-xl ">
        <h1 class="text-center h5 text-xl">Add Menu      </h1>

        <div class="w-[30rem] flex flex-col gap-[2rem] items-center justify-center">
          <div class="p-[1rem] flex items-center gap-[1rem]">
            <input
              class="flex-[5] bg-slate-100 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
              type="text"
              
            />
            <button
              class="group rounded-full w-10 h-10 text-2xl flex-[2] bg-green-500 font-bold  text-white relative overflow-hidden"
            >
              +
            </button>
          </div>
        </div>
        <div class="w-[70%] mx-auto  rounded">
          
              <div class="flex items-center justify-center  p-2 gap-[1rem]">
                <div class="w-[10rem] border border-[1px] rounded p-2 background-[white]">
                  
                </div>
              
                <button
                  class="group rounded-full w-6 h-8 flex-[2] text-center bg-red-500 h3 font-bold text-lg text-white relative overflow-hidden"
                >
                  X
                </button>
              </div>
            
          
        </div>
      </div>