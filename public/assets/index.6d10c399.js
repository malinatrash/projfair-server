import{b as h,c as s,i as t,F as E,E as $,h as e,x as n,e as v,f as c,t as l,G as y,p as _,H as g,y as x,I as P,g as k,l as p,R as A}from"./vendor.38f2e4e5.js";import{_ as j,R as d,u as R,B as C}from"./index.d1195915.js";import{_ as T}from"./PageLayout.65bbb753.js";import"./BasePanel.ae9e0cff.js";const I=()=>window.history.length>2;const F={class:"breadcrumbs"},N=["onClick"],O={key:2},S=h({props:{breadcrumbs:null},setup(m){return(a,i)=>(s(),t("ul",F,[(s(!0),t(E,null,$(m.breadcrumbs,({to:r,title:u,back:o},b)=>(s(),t("li",{key:b,class:"breadcrumbs-item"},[o?(s(),t("button",{key:0,class:"breadcrumbs-link",onClick:f=>e(I)()?a.$router.back():a.$router.push({name:e(d).HOME})},n(u),9,N)):r?(s(),v(e(y),{key:1,to:r,class:"breadcrumbs-link"},{default:c(()=>[l(n(u),1)]),_:2},1032,["to"])):(s(),t("span",O,n(u),1))]))),128))]))}});var H=j(S,[["__scopeId","data-v-4e48e800"]]);const V=l(" \u043E \u043F\u0440\u043E\u0435\u043A\u0442\u0435 "),w=l(" \u0441\u043F\u0438\u0441\u043E\u043A \u0437\u0430\u044F\u0432\u043E\u043A "),L=h({setup(m){return(a,i)=>(s(),t("div",null,[_(e(y),{class:"project-tab",to:{name:e(d).PROJECT_DETAILS}},{default:c(()=>[V]),_:1},8,["to"]),_(e(y),{class:"project-tab",to:{name:e(d).PROJECT_PARTICIPATIONS}},{default:c(()=>[w]),_:1},8,["to"])]))}});var M=j(L,[["__scopeId","data-v-80a707ee"]]);const D={class:"header"},J={class:"page-title"},G={key:0},q={key:1},z={key:2},K={class:"d-flex justify-content-center mt-3"},Q=l(" \u043D\u0430\u0437\u0430\u0434 \u043A \u0441\u043F\u0438\u0441\u043A\u0443 "),U=h({setup(m){const a=g(),i=R(),{loading:r,error:u,openedProject:o}=x(i);return P(()=>{i.getSingleProject(Number(a.params.id))}),(b,f)=>(s(),v(T,null,{default:c(()=>{var B;return[k("header",D,[_(H,{class:"breadcrumbs",breadcrumbs:[{title:"\u0412\u0441\u0435 \u043F\u0440\u043E\u0435\u043A\u0442\u044B",to:{name:e(d).HOME}},{title:((B=e(o))==null?void 0:B.title)||""}]},null,8,["breadcrumbs"]),k("h1",J,[e(r)?(s(),t("span",G,"\u0437\u0430\u0433\u0440\u0443\u0437\u043A\u0430...")):p("",!0),e(u)?(s(),t("span",q,n(e(u)),1)):p("",!0),e(o)?(s(),t("span",z,n(e(o).title),1)):p("",!0)])]),!e(u)&&!e(r)?(s(),v(M,{key:0})):p("",!0),_(e(A)),k("div",K,[_(C,{case:"uppercase",variant:"link",onClick:f[0]||(f[0]=W=>b.$router.push({name:e(d).HOME}))},{default:c(()=>[Q]),_:1})])]}),_:1}))}});var se=j(U,[["__scopeId","data-v-57b5b038"]]);export{se as default};
