import{c,b as d,S as i,B as p}from"./index.d618ad03.js";import{b as l,z as m,h as a,c as f,e as h,f as v,l as S,t as _}from"./vendor.66a6c8d1.js";const B=_(" \u041F\u043E\u0434\u0430\u0442\u044C \u0437\u0430\u044F\u0432\u043A\u0443 "),b=l({props:{project:null,variant:{default:"outlined"}},setup(r){const t=r,o=c(),n=d(),u=m(()=>{var e;return t.project.state.id===i.ArchivedState||((e=n.profileData)==null?void 0:e.is_teacher)});return(e,s)=>a(u)?S("",!0):(f(),h(p,{key:0,case:"uppercase",variant:t.variant,disabled:a(o).loading,onClick:s[0]||(s[0]=j=>a(o).openParticipationModal(t.project))},{default:v(()=>[B]),_:1},8,["variant","disabled"]))}});export{b as _};
