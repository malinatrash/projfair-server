import{_ as p,h as y,B as g}from"./index.93c56609.js";import{d as _,a as l,f as s,g as S,h as d,n as $,s as V,v as w,e as x,r as C,J as f,u as n,F as I,G as N,p as b,b as v,q as m,t as k}from"./vendor.bde10b0a.js";const A=t=>(V("data-v-3c9f2986"),t=t(),w(),t),T=A(()=>x("span",{class:"multiselect-tag-remove-icon"},null,-1)),D=[T],L=_({props:{disabled:{type:Boolean,default:!1},deletable:{type:Boolean}},emits:["delete"],setup(t){return(e,a)=>(l(),s("span",{class:$(["tag",{disabled:t.disabled}])},[S(e.$slots,"default",{},void 0,!0),t.deletable?(l(),s("button",{key:0,class:"multiselect-tag-remove remove-btn",onClick:a[0]||(a[0]=u=>e.$emit("delete"))},D)):d("",!0)],2))}});var j=p(L,[["__scopeId","data-v-3c9f2986"]]);const E={key:0,class:"list"},F={key:0,class:"show-btn-wrapper"},q=_({props:{skills:{default:()=>[]},showAll:{type:Boolean,default:!1},defaultVisible:{default:3},disableAll:{type:Boolean,default:!1},deletable:{type:Boolean,default:void 0}},emits:["delete"],setup(t){const e=t,a=e.skills.length-e.defaultVisible,u=`+${a} ${y(a,["\u0442\u0435\u0433","\u0442\u0435\u0433\u0430","\u0442\u0435\u0433\u043E\u0432"])}`,i=C(e.showAll),r=f(()=>i.value?e.skills:e.skills.slice(0,e.defaultVisible)),h=f(()=>e.skills.length>e.defaultVisible&&!i.value);return(B,c)=>n(r).length>0?(l(),s("ul",E,[(l(!0),s(I,null,N(n(r),o=>(l(),s("li",{key:o.id},[b(j,{disabled:t.disableAll,deletable:t.deletable,onDelete:z=>B.$emit("delete",o)},{default:v(()=>[m(k(o.skill),1)]),_:2},1032,["disabled","deletable","onDelete"])]))),128)),n(h)?(l(),s("li",F,[b(g,{case:"lowercase",variant:"inline-link",onClick:c[0]||(c[0]=o=>i.value=!0)},{default:v(()=>[m(k(u))]),_:1})])):d("",!0)])):d("",!0)}});var O=p(q,[["__scopeId","data-v-b2fd2806"]]);export{O as S};