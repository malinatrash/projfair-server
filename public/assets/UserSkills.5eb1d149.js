import{_ as F,d as f,s as B,B as A,f as V,g}from"./index.0256c957.js";import{B as I}from"./BasePanel.b07d2b9a.js";import{S as h}from"./SkillsList.7f464ce9.js";import{k as L}from"./multiselect.d799d500.js";import{d as S,r as k,L as j,a as i,c as T,b as o,p as l,e as u,u as t,f as n,H as b,F as v,s as w,v as $,q as x,t as y}from"./vendor.b1e86581.js";const D=e=>(w("data-v-bfa1b580"),e=e(),$(),e),N=D(()=>u("h1",null,"\u0420\u0435\u0434\u0430\u043A\u0442\u0438\u0440\u043E\u0432\u0430\u043D\u0438\u0435 \u043D\u0430\u0432\u044B\u043A\u043E\u0432",-1)),U={class:"search-wrapper"},P=D(()=>u("h2",null,"\u0414\u043E\u0431\u0430\u0432\u0438\u0442\u044C \u043D\u0430\u0432\u044B\u043A\u0438",-1)),q={class:"skills"},z={class:"col"},H=D(()=>u("h3",{class:"tags-title"},"\u041F\u043E \u043D\u0430\u043F\u0440\u0430\u0432\u043B\u0435\u043D\u0438\u044E",-1)),G={class:"skills-list by-direction-skills"},J=["onClick"],K={class:"col right-col"},O=D(()=>u("h3",{class:"tags-title"},"\u041F\u043E \u0430\u043B\u0444\u0430\u0432\u0438\u0442\u0443",-1)),Q={class:"skills-list"},R=["onClick"],W={class:"actions"},X=x("\u0441\u043E\u0445\u0440\u0430\u043D\u0438\u0442\u044C"),Y=S({setup(e){const r=f();function _(d){c.value.includes(d)||c.value.push(d)}const c=k([]),m=k(B),a=k(""),p=j(()=>m.value.filter(d=>!a.value||d.skill.toLowerCase()===a.value.toLowerCase()));return(d,E)=>(i(),T(V,{size:"m","is-show":t(r).editSkillsModal,onClose:E[1]||(E[1]=s=>t(r).editSkillsModal=!1)},{header:o(()=>[N,l(h,{class:"tags-list",skills:c.value,"show-all":!0},null,8,["skills"])]),default:o(()=>[u("div",U,[P,l(t(L),{ref:"multiselect",modelValue:a.value,"onUpdate:modelValue":E[0]||(E[0]=s=>a.value=s),placeholder:"\u041F\u043E\u0438\u0441\u043A \u043F\u043E \u043D\u0430\u0432\u044B\u043A\u0430\u043C",searchable:!0,options:t(B),label:"skill","track-by":"skill","value-prop":"skill",class:"search"},null,8,["modelValue","options"])]),u("div",q,[u("div",z,[H,u("ul",G,[(i(!0),n(v,null,b(t(p),s=>(i(),n("li",{key:s.id,class:"tag-item"},[u("button",{class:"tag-btn",onClick:M=>_(s)},y(s.skill),9,J)]))),128))])]),u("div",K,[O,u("ul",Q,[(i(!0),n(v,null,b(t(p),s=>(i(),n("li",{key:s.id,class:"tag-item"},[u("button",{class:"tag-btn",onClick:M=>_(s)},y(s.skill),9,R)]))),128))])])]),u("div",W,[l(A,{case:"uppercase"},{default:o(()=>[X]),_:1})])]),_:1},8,["is-show"]))}});var Z=F(Y,[["__scopeId","data-v-bfa1b580"]]);const C=e=>(w("data-v-1cc352d6"),e=e(),$(),e),u4=C(()=>u("h1",{class:"title"},"\u041D\u0430\u0432\u044B\u043A\u0438",-1)),s4=C(()=>u("h2",{class:"subtitle"},"\u0410\u043A\u0430\u0434\u0435\u043C\u0438\u0447\u0435\u0441\u043A\u0438\u0435 \u043D\u0430\u0432\u044B\u043A\u0438 (\u0418\u0421\u0422\u0431-18-1)",-1)),l4=C(()=>u("div",{class:"divider"},null,-1)),e4=C(()=>u("h2",{class:"subtitle"},"\u0418\u043D\u0434\u0438\u0432\u0438\u0434\u0443\u0430\u043B\u044C\u043D\u044B\u0435 \u043D\u0430\u0432\u044B\u043A\u0438",-1)),t4=x(" \u0420\u0435\u0434\u0430\u043A\u0442\u0438\u0440\u043E\u0432\u0430\u0442\u044C \u043D\u0430\u0432\u044B\u043A\u0438 "),a4=S({setup(e){const r=f(),_=`\u0410\u043A\u0430\u0434\u0435\u043C\u0438\u0447\u0435\u0441\u043A\u0438\u0435 \u043D\u0430\u0432\u044B\u043A\u0438 - \u044D\u0442\u043E \u043D\u0430\u0431\u043E\u0440 \u043F\u0440\u0430\u043A\u0442\u0438\u0447\u0435\u0441\u043A\u0438\u0445 \u0443\u043C\u0435\u043D\u0438\u0439 \u0441\u0442\u0443\u0434\u0435\u043D\u0442\u043E\u0432, 
  \u043A\u043E\u0442\u043E\u0440\u044B\u0435 \u043F\u043E\u0437\u0432\u043E\u043B\u044F\u044E\u0442 \u0438\u043C \u0431\u044B\u0441\u0442\u0440\u0435\u0435 \u0438 \u043B\u0443\u0447\u0448\u0435 \u0443\u0441\u0432\u0430\u0438\u0432\u0430\u0442\u044C \u043D\u043E\u0432\u044B\u0439 \u043C\u0430\u0442\u0435\u0440\u0438\u0430\u043B \u0432 \u0443\u043D\u0438\u0432\u0435\u0440\u0441\u0438\u0442\u0435\u0442\u0435, 
  \u0432\u0438\u0434\u0435\u0442\u044C \u043F\u043E\u0441\u0442\u0430\u0432\u043B\u0435\u043D\u043D\u044B\u0435 \u043F\u0440\u043E\u0431\u043B\u0435\u043C\u044B \u0433\u043B\u0443\u0431\u0436\u0435 \u0438 \u0433\u043B\u0443\u0431\u0436\u0435 \u0440\u0430\u0437\u043C\u044B\u0448\u043B\u044F\u0442\u044C \u043D\u0430\u0434 \u0437\u0430\u0434\u0430\u043D\u043D\u044B\u043C\u0438 \u0432\u043E\u043F\u0440\u043E\u0441\u0430\u043C\u0438, 
  \u0447\u0442\u043E \u0432 \u0438\u0442\u043E\u0433\u0435 \u043F\u043E\u043C\u043E\u0433\u0430\u0435\u0442 \u0438\u043C \u043F\u0438\u0441\u0430\u0442\u044C \u0431\u043E\u043B\u0435\u0435 \u0441\u043B\u043E\u0436\u043D\u044B\u0435 \u0438 \u0438\u043D\u0442\u0435\u0440\u0435\u0441\u043D\u044B\u0435 \u0430\u043A\u0430\u0434\u0435\u043C\u0438\u0447\u0435\u0441\u043A\u0438\u0435 \u0440\u0430\u0431\u043E\u0442\u044B (\u044D\u0441\u0441\u0435, \u0434\u043E\u043A\u043B\u0430\u0434\u044B)`,c=`\u041F\u043E\u0434\u0431\u043E\u0440 \u043A\u0430\u043D\u0434\u0438\u0434\u0430\u0442\u043E\u0432 \u043D\u0430\u0447\u0438\u043D\u0430\u0435\u0442\u0441\u044F \u0441 \u043E\u0446\u0435\u043D\u043A\u0438 \u0440\u0435\u0437\u044E\u043C\u0435. 
  \u0415\u0441\u043B\u0438 \u0445\u043E\u0442\u0438\u0442\u0435, \u0447\u0442\u043E\u0431\u044B \u0432\u0430\u043C \u043D\u0430\u0437\u043D\u0430\u0447\u0438\u043B\u0438 \u0441\u043E\u0431\u0435\u0441\u0435\u0434\u043E\u0432\u0430\u043D\u0438\u0435, \u0442\u043E \u0443\u043A\u0430\u0437\u044B\u0432\u0430\u0439\u0442\u0435 \u0441\u0432\u043E\u0438 \u043E\u0441\u043D\u043E\u0432\u043D\u044B\u0435 \u0443\u043C\u0435\u043D\u0438\u044F, 
  \u043D\u0435 \u043D\u0430\u0434\u0435\u044F\u0441\u044C, \u0447\u0442\u043E \u043F\u0430\u0440\u044B \u043E\u0431\u0449\u0438\u0445 \u0444\u0440\u0430\u0437 \u0431\u0443\u0434\u0435\u0442 \u0434\u043E\u0441\u0442\u0430\u0442\u043E\u0447\u043D\u043E. 
  \u0412\u044B \u043C\u043E\u0436\u0435\u0442\u0435 \u043F\u043E\u0441\u043C\u043E\u0442\u0440\u0435\u0442\u044C \u043F\u0440\u0438\u043C\u0435\u0440 \u043F\u0440\u043E\u0444\u0435\u0441\u0441\u0438\u043E\u043D\u0430\u043B\u044C\u043D\u044B\u0445 \u0437\u043D\u0430\u043D\u0438\u0439 \u0434\u043B\u044F \u0440\u0435\u0437\u044E\u043C\u0435 \u0441\u0438\u0441\u0442\u0435\u043C\u043D\u043E\u0433\u043E \u0430\u0434\u043C\u0438\u043D\u0438\u0441\u0442\u0440\u0430\u0442\u043E\u0440\u0430, 
  \u0447\u0442\u043E\u0431\u044B \u043F\u043E\u043D\u044F\u0442\u044C, \u0447\u0442\u043E \u043D\u0430\u0434\u043E \u0443\u043A\u0430\u0437\u044B\u0432\u0430\u0442\u044C. \u041C\u043E\u0436\u043D\u043E \u0432\u044B\u0434\u0435\u043B\u0438\u0442\u044C \u0442\u0430\u043A\u0438\u0435 \u0443\u043C\u0435\u043D\u0438\u044F:`;return(m,a)=>(i(),n(v,null,[l(I,{class:"panel",cols:1},{default:o(()=>[u("div",null,[u4,l(g,{message:_},{default:o(()=>[s4]),_:1}),l(h,{class:"tags-list",skills:t(B),"show-all":!0,"disable-all":!0},null,8,["skills"]),l4,l(g,{message:c},{default:o(()=>[e4]),_:1}),l(h,{class:"tags-list",skills:t(B),"show-all":!0},null,8,["skills"]),l(A,{class:"edit-btn",case:"uppercase",variant:"outlined",onClick:a[0]||(a[0]=p=>t(r).editSkillsModal=!0)},{default:o(()=>[t4]),_:1})])]),_:1}),l(Z)],64))}});var r4=F(a4,[["__scopeId","data-v-1cc352d6"]]);export{r4 as default};