import{f as v,h as s,p as t,F as E,O as $,m as e,A as n,i as f,j as c,z as l,E as k,v as _,c as g,C as x,o as A,l as y,s as p,R as C}from"./vendor.js";import{_ as j,R as d,u as P,B as R}from"./index.js";import{_ as T}from"./PageLayout.js";const F=()=>window.history.length>2;const I={class:"breadcrumbs"},N=["onClick"],O={key:2},S=v({props:{breadcrumbs:null},setup(m){return(a,i)=>(s(),t("ul",I,[(s(!0),t(E,null,$(m.breadcrumbs,({to:r,title:u,back:o},b)=>(s(),t("li",{key:b,class:"breadcrumbs-item"},[o?(s(),t("button",{key:0,class:"breadcrumbs-link",onClick:h=>e(F)()?a.$router.back():a.$router.push({name:e(d).HOME})},n(u),9,N)):r?(s(),f(e(k),{key:1,to:r,class:"breadcrumbs-link"},{default:c(()=>[l(n(u),1)]),_:2},1032,["to"])):(s(),t("span",O,n(u),1))]))),128))]))}});var V=j(S,[["__scopeId","data-v-021a7ab9"]]);const w=l(" \u043E \u043F\u0440\u043E\u0435\u043A\u0442\u0435 "),H=l(" \u0441\u043F\u0438\u0441\u043E\u043A \u0437\u0430\u044F\u0432\u043E\u043A "),L=v({setup(m){return(a,i)=>(s(),t("div",null,[_(e(k),{class:"project-tab",to:{name:e(d).PROJECT_DETAILS}},{default:c(()=>[w]),_:1},8,["to"]),_(e(k),{class:"project-tab",to:{name:e(d).PROJECT_PARTICIPATIONS}},{default:c(()=>[H]),_:1},8,["to"])]))}});var M=j(L,[["__scopeId","data-v-064b8752"]]);const D={class:"header"},J={class:"page-title"},z={key:0},q={key:1},G={key:2},K={class:"d-flex justify-content-center mt-3"},Q=l(" \u043D\u0430\u0437\u0430\u0434 \u043A \u0441\u043F\u0438\u0441\u043A\u0443 "),U=v({setup(m){const a=g(),i=P(),{loading:r,error:u,openedProject:o}=x(i);return A(()=>{i.getSingleProject(Number(a.params.id))}),(b,h)=>(s(),f(T,null,{default:c(()=>{var B;return[y("header",D,[_(V,{class:"breadcrumbs",breadcrumbs:[{title:"\u0412\u0441\u0435 \u043F\u0440\u043E\u0435\u043A\u0442\u044B",to:{name:e(d).HOME}},{title:((B=e(o))==null?void 0:B.title)||""}]},null,8,["breadcrumbs"]),y("h1",J,[e(r)?(s(),t("span",z,"\u0437\u0430\u0433\u0440\u0443\u0437\u043A\u0430...")):p("",!0),e(u)?(s(),t("span",q,n(e(u)),1)):p("",!0),e(o)?(s(),t("span",G,n(e(o).title),1)):p("",!0)])]),!e(u)&&!e(r)?(s(),f(M,{key:0})):p("",!0),_(e(C)),y("div",K,[_(R,{case:"uppercase",variant:"link",onClick:h[0]||(h[0]=W=>b.$router.push({name:e(d).HOME}))},{default:c(()=>[Q]),_:1})])]}),_:1}))}});var ee=j(U,[["__scopeId","data-v-2999c2cd"]]);export{ee as default};
