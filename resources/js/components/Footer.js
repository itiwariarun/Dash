import React from 'react'
import ReactDOM from 'react-dom';

function Footer() {
  return (

<div class='h-[20rem] min-full bg-stone-50'>
               <div class=' columns-4 container space-x-10  h-[20rem] text-center px-20 pt-[3rem] min-w-full '>
                <div class='truncate h-[16rem]'> <a href="{{url('/home')}}" >
                   <h1 class="pt-7 pl-28 m-0 font-serif font-semibold text-2xl text-stone-900 text-uppercase">Hooks Form</h1>
               </a></div>
            <div class='truncate h-[16rem] text-left border-t-2 border-black text-black'>
           <h1 class='py-5 font-black '>ADDRESS</h1>
           <p>
           500 Terry Francois Street<br/>
           San Francisco, CA 94158</p>
            </div>
            <div class='truncate h-[16rem] text-left border-t-2 border-black text-black'><h1 class='font-black py-5'>CONTACT</h1>
           <p>
           Tel: 123 456 7890<br/>
           Email:  info@mysite.com</p></div>
            <div class='truncate h-[16rem] text-left border-t-2 border-black text-black'><h1 class='py-5 font-black'>FOLLOW US</h1>
           <p>
           Facebook  |   LinkedIn  |  Twitter</p></div>
           </div>
           <p className='pb-5 font-black text-center'>@ Copyright by XYZ</p>
               </div>
  )
}

export default Footer;
if (document.getElementById('Footer')) {
  ReactDOM.render(<Footer />, document.getElementById('Footer'));
}