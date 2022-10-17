import{_ as r}from"./PageLayout.js";import{_ as A,b as d}from"./index.js";import{f as n,r as l,g as p,h as D,i as _,j as u,q as B,v as t,x as h,y as f,z as E,l as C}from"./vendor.js";import{B as v}from"./BaseAccordion.js";import{C as m}from"./ContactForm.js";import"./multiselect.js";const g=n({setup(o){const s=l(null),F=l(!1);return p(s,()=>F.value=!1),(c,a)=>(D(),_(v,{ref_key:"accordionEl",ref:s,opened:F.value,onToggle:a[0]||(a[0]=R=>F.value=!F.value)},{title:u(()=>[B(c.$slots,"title")]),content:u(()=>[B(c.$slots,"content")]),_:3},8,["opened"]))}});const x=n({setup(o){return(s,F)=>(D(),_(d,{class:"panel"},{default:u(()=>[t(g,{class:"question"},{title:u(()=>[B(s.$slots,"title",{},void 0,!0)]),content:u(()=>[B(s.$slots,"content",{},void 0,!0)]),_:3})]),_:3}))}});var e=A(x,[["__scopeId","data-v-0c0efef3"]]);const i=o=>(h("data-v-0fec7a5c"),o=o(),f(),o),$=i(()=>C("header",{class:"header"},[C("h1",{class:"title page-title"},"\u0412\u043E\u043F\u0440\u043E\u0441-\u043E\u0442\u0432\u0435\u0442"),C("p",{class:"page-subtitle subtitle"}," \u041D\u0430 \u044D\u0442\u043E\u0439 \u0441\u0442\u0440\u0430\u043D\u0438\u0446\u0435 \u0440\u0430\u0437\u043C\u0435\u0449\u0435\u043D\u044B \u0447\u0430\u0441\u0442\u043E\u0437\u0430\u0434\u0430\u0432\u0430\u0435\u043C\u044B\u0435 \u0432\u043E\u043F\u0440\u043E\u0441\u044B. \u0412\u044B \u0432\u0441\u0435\u0433\u0434\u0430 \u043C\u043E\u0436\u0435\u0442\u0435 \u0437\u0430\u0434\u0430\u0442\u044C \u0441\u0432\u043E\u0439 \u0432\u043E\u043F\u0440\u043E\u0441 \u043D\u0430\u043C \u0438 \u043C\u044B \u043E\u0442\u0432\u0435\u0442\u0438\u043C \u043D\u0430 \u043D\u0435\u0433\u043E \u043B\u0438\u0447\u043D\u043E \u0438\u043B\u0438 \u0440\u0430\u0437\u043C\u0435\u0441\u0442\u0438\u043C \u0432 \u0434\u0430\u043D\u043D\u043E\u043C \u0440\u0430\u0437\u0434\u0435\u043B\u0435. ")],-1)),j=E("\u041E\u0442 \u0447\u0435\u0433\u043E \u0437\u0430\u0432\u0438\u0441\u0438\u0442 \u0441\u043B\u043E\u0436\u043D\u043E\u0441\u0442\u044C \u043F\u0440\u043E\u0435\u043A\u0442\u0430?"),y=E(" \u0421\u043B\u043E\u0436\u043D\u043E\u0441\u0442\u044C \u0443\u0441\u0442\u0430\u043D\u0430\u0432\u043B\u0438\u0432\u0430\u0435\u0442 \u0441\u0430\u043C \u043D\u0430\u0441\u0442\u0430\u0432\u043D\u0438\u043A \u043F\u0440\u043E\u0435\u043A\u0442\u0430. \u0421\u043B\u043E\u0436\u043D\u043E\u0441\u0442\u044C \u043C\u043E\u0436\u0435\u0442 \u0437\u0430\u0432\u0438\u0441\u0435\u0442\u044C \u043A\u0430\u043A \u043E\u0442 \u0441\u043F\u0435\u0446\u0438\u0444\u0438\u0447\u043D\u043E\u0441\u0442\u0438 \u0442\u0440\u0435\u0431\u0443\u0435\u043C\u044B\u0445 \u043D\u0430\u0432\u044B\u043A\u043E\u0432, \u0438\u043B\u0438 \u0441\u0442\u0435\u043F\u0435\u043D\u0438 \u0438\u0445 \u0432\u043B\u0430\u0434\u0435\u043D\u0438\u044F, \u0442\u0430\u043A \u0438 \u0432 \u043C\u0430\u0441\u0448\u0442\u0430\u0431\u043D\u043E\u0441\u0442\u0438 \u043F\u0440\u043E\u0435\u043A\u0442\u0430 \u0438\u043B\u0438 \u0432 \u0441\u043B\u043E\u0436\u043D\u043E\u0441\u0442\u0438 \u043F\u0440\u0435\u0434\u043C\u0435\u0442\u043D\u043E\u0439 \u043E\u0431\u043B\u0430\u0441\u0442\u0438. "),k=E("\u041A\u0430\u043A \u043F\u043E\u043C\u0435\u043D\u044F\u0442\u044C \u043F\u0440\u0438\u043E\u0440\u0438\u0442\u0435\u0442/\u043E\u0442\u043E\u0437\u0432\u0430\u0442\u044C \u0437\u0430\u044F\u0432\u043A\u0443?"),I=E(" \u041F\u043E\u043C\u0435\u043D\u044F\u0442\u044C \u043F\u0440\u0438\u043E\u0440\u0438\u0442\u0435\u0442 \u0438\u043B\u0438 \u043E\u0442\u043E\u0437\u0432\u0430\u0442\u044C \u0437\u0430\u044F\u0432\u043A\u0443 \u043C\u043E\u0436\u043D\u043E \u0432 \u0441\u0432\u043E\u0435\u043C \u043F\u0440\u043E\u0444\u0438\u043B\u0435 \u0432 \u0440\u0430\u0437\u0434\u0435\u043B\u0435 \xAB\u041C\u043E\u0438 \u0437\u0430\u044F\u0432\u043A\u0438\xBB. \u0412 \u0441\u043B\u0443\u0447\u0430\u0435 \u043E\u0442\u043C\u0435\u043D\u044B \u0437\u0430\u044F\u043A\u0438 \u0432\u044B \u043F\u043E\u0442\u0435\u0440\u044F\u0442\u0435 \u043C\u0435\u0441\u0442\u043E \u0432 \u043E\u0447\u0435\u0440\u0435\u0434\u0438 \u043D\u0430 \u0437\u0430\u0447\u0438\u0441\u043B\u0435\u043D\u0438\u0435. "),b=E(" \u041C\u043E\u0433\u0443 \u043B\u0438 \u044F \u0443\u0447\u0430\u0441\u0442\u0432\u043E\u0432\u0430\u0442\u044C \u043E\u0434\u043D\u043E\u0432\u0440\u0435\u043C\u0435\u043D\u043D\u043E \u0432 \u043D\u0435\u0441\u043A\u043E\u043B\u044C\u043A\u0438\u0445 \u043F\u0440\u043E\u0435\u043A\u0442\u0430\u0445? "),q=E(" \u041D\u0435\u0442. \u041D\u0430 \u0434\u0430\u043D\u043D\u044B\u0439 \u043C\u043E\u043C\u0435\u043D\u0442 \u043C\u043E\u0436\u043D\u043E \u0443\u0447\u0430\u0441\u0442\u0432\u043E\u0432\u0430\u0442\u044C \u043B\u0438\u0448\u044C \u0432 \u043E\u0434\u043D\u043E\u043C \u043F\u0440\u043E\u0435\u043A\u0442\u0435, \u043D\u043E \u043F\u043E\u0434\u0430\u0442\u044C \u0437\u0430\u044F\u0432\u043A\u0443 \u043D\u0430 \u0443\u0447\u0430\u0441\u0442\u0438\u0435 \u0432\u044B \u043C\u043E\u0436\u0435\u0442\u0435 \u0441\u0440\u0430\u0437\u0443 \u043D\u0430 3 \u043F\u0440\u043E\u0435\u043A\u0442\u0430, \u0443\u043A\u0430\u0437\u0430\u0432 \u0438\u0445 \u043F\u0440\u0438\u043E\u0440\u0438\u0442\u0435\u0442, \u043A\u043E\u0442\u043E\u0440\u044B\u0439 \u0431\u0443\u0434\u0435\u0442 \u0443\u0447\u0442\u0451\u043D \u043F\u0440\u0438 \u0440\u0430\u0441\u043F\u0440\u0435\u0434\u0435\u043B\u0435\u043D\u0438\u0438 \u043D\u0430 \u043F\u0440\u043E\u0435\u043A\u0442\u044B. "),P=E("\u041A\u0430\u043A \u043F\u0440\u043E\u0438\u0441\u0445\u043E\u0434\u0438\u0442 \u0440\u0430\u0441\u043F\u0440\u0435\u0434\u0435\u043B\u0435\u043D\u0438\u0435?"),S=E(" \u0420\u0430\u0441\u043F\u0440\u0435\u0434\u0435\u043B\u0435\u043D\u0438\u0435 \u043F\u0440\u043E\u0438\u0441\u0445\u043E\u0434\u0438\u0442 \u0430\u0432\u0442\u043E\u043C\u0430\u0442\u0438\u0447\u0435\u0441\u043A\u0438. \u0421\u043D\u0430\u0447\u0430\u043B\u0430 \u0441\u0438\u0441\u0442\u0435\u043C\u0430 \u0440\u0430\u0441\u043F\u0440\u0435\u0434\u0435\u043B\u044F\u0435\u0442 \u043F\u043E \u043F\u0440\u043E\u0435\u043A\u0442\u0430\u043C \u0442\u0435\u0445 \u0441\u0442\u0443\u0434\u0435\u043D\u0442\u043E\u0432, \u043A\u043E\u0442\u043E\u0440\u044B\u0435 \u0443\u043A\u0430\u0437\u0430\u043B\u0438 \u043F\u0435\u0440\u0432\u044B\u0439 \u043F\u0440\u0438\u043E\u0440\u0438\u0442\u0435\u0442 \u0432 \u0437\u0430\u044F\u0432\u043A\u0435. \u0417\u0430\u0442\u0435\u043C \u0442\u0430\u043A\u0430\u044F \u0436\u0435 \u043E\u043F\u0435\u0440\u0430\u0446\u0438\u044F \u043F\u0440\u043E\u0445\u043E\u0434\u0438\u0442 \u0441\u043E \u0432\u0442\u043E\u0440\u044B\u043C \u043F\u0440\u0438\u043E\u0440\u0438\u0442\u0435\u0442\u043E\u043C, \u043F\u043E\u0441\u043B\u0435 \u0441 3-\u0438\u043C \u043F\u0440\u0438\u043E\u0440\u0438\u0442\u0435\u0442\u043E\u043C. \u041F\u043E\u0441\u043B\u0435 \u0442\u043E\u0433\u043E, \u043A\u0430\u043A \u0441\u0442\u0443\u0434\u0435\u043D\u0442\u044B, \u043F\u043E\u0434\u0430\u0432\u0448\u0438\u0435 \u0437\u0430\u044F\u0432\u043A\u0438, \u0431\u0443\u0434\u0443\u0442 \u0440\u0430\u0441\u043F\u0440\u0435\u0434\u0435\u043B\u0435\u043D\u044B, \u0441\u0438\u0441\u0442\u0435\u043C\u0430 \u0440\u0430\u0441\u043F\u0440\u0435\u0434\u0435\u043B\u0438\u0442 \u0441\u0442\u0443\u0434\u0435\u043D\u0442\u043E\u0432, \u043A\u043E\u0442\u043E\u0440\u044B\u0435 \u043D\u0435 \u043F\u043E\u0434\u0430\u043B\u0438 \u0437\u0430\u044F\u0432\u043A\u0438. "),N=E("\u0427\u0442\u043E \u0431\u0443\u0434\u0435\u0442, \u0435\u0441\u043B\u0438 \u044F \u043D\u0435 \u043F\u043E\u0434\u0430\u043C \u0437\u0430\u044F\u0432\u043A\u0443?"),V=E(" \u0421\u0438\u0441\u0442\u0435\u043C\u0430 \u0430\u0432\u0442\u043E\u043C\u0430\u0442\u0438\u0447\u0435\u0441\u043A\u0438 \u0440\u0430\u0441\u043F\u0440\u0435\u0434\u0435\u043B\u0438\u0442 \u0441\u0442\u0443\u0434\u0435\u043D\u0442\u043E\u0432 \u043F\u043E \u0441\u0432\u043E\u0431\u043E\u0434\u043D\u044B\u043C \u043F\u0440\u043E\u0435\u043A\u0442\u0430\u043C, \u043A\u043E\u0442\u043E\u0440\u044B\u0435 \u043D\u0435 \u043F\u043E\u0434\u0430\u043B\u0438 \u0437\u0430\u044F\u0432\u043A\u0438 \u0438\u0441\u0445\u043E\u0434\u044F \u0438\u0437 \u0438\u0445 \u0441\u043F\u0435\u0446\u0438\u0430\u043B\u044C\u043D\u043E\u0441\u0442\u0435\u0439 \u0438 \u043D\u0430\u0432\u044B\u043A\u043E\u0432. "),w=E("\u0427\u0442\u043E \u0431\u0443\u0434\u0435\u0442, \u0435\u0441\u043B\u0438 \u044F \u043D\u0435 \u0432\u044B\u0431\u0435\u0440\u0443 \u043D\u0430\u0432\u044B\u043A\u0438?"),Q=E(" \u0412\u0441\u0435 \u0441\u0442\u0443\u0434\u0435\u043D\u0442\u044B \u043E\u0431\u043B\u0430\u0434\u0430\u044E\u0442 \u0431\u0430\u0437\u043E\u0432\u044B\u043C\u0438 \u043D\u0430\u0432\u044B\u043A\u0430\u043C\u0438, \u0432\u0437\u044F\u0442\u044B\u043C\u0438 \u0438\u0437 \u043F\u0440\u043E\u0439\u0434\u0435\u043D\u043D\u044B\u0445 \u043A\u0443\u0440\u0441\u043E\u0432 \u043F\u043E \u0432\u0430\u0448\u0435\u0439 \u0441\u043F\u0435\u0446\u0438\u0430\u043B\u044C\u043D\u043E\u0441\u0442\u0438. "),T=E("\u0427\u0442\u043E \u0442\u0430\u043A\u043E\u0435 \u043F\u0440\u0438\u043E\u0440\u0438\u0442\u0435\u0442?"),z=E(" \u0412\u044B \u043C\u043E\u0436\u0435\u0442\u0435 \u043F\u043E\u0434\u0430\u0442\u044C \u0437\u0430\u044F\u0432\u043A\u0438 \u043D\u0430 3 \u043F\u0440\u043E\u0435\u043A\u0442\u0430 \u0441\u0440\u0430\u0437\u0443, \u043D\u043E \u0447\u0442\u043E\u0431\u044B \u043C\u044B \u0441\u043C\u043E\u0433\u043B\u0438 \u0432\u0430\u0441 \u0440\u0430\u0441\u043F\u0440\u0435\u0434\u0435\u043B\u0438\u0442\u044C \u0432 \u043F\u0440\u043E\u0435\u043A\u0442, \u0432 \u043A\u043E\u0442\u043E\u0440\u044B\u0439 \u0432\u044B \u0445\u043E\u0442\u0438\u0442\u0435 \u043F\u043E\u043F\u0430\u0441\u0442\u044C \u0441 \u0431\u043E\u043B\u044C\u0448\u0435\u0439 \u0432\u0435\u0440\u043E\u044F\u0442\u043D\u043E\u0441\u0442\u044C\u044E, \u0432\u044B \u0441\u0442\u0430\u0432\u0438\u0442\u0435 \u0435\u043C\u0443 \u0431\u043E\u043B\u044C\u0448\u0438\u0439 \u043F\u0440\u0438\u043E\u0440\u0438\u0442\u0435\u0442. \u0412\u044B \u0441\u043C\u043E\u0436\u0435\u0442\u0435 \u043F\u043E\u043C\u0435\u043D\u044F\u0442\u044C \u043F\u0440\u0438\u043E\u0440\u0438\u0442\u0435\u0442 \u043F\u0440\u043E\u0435\u043A\u0442\u0430 \u0432 \u043B\u0438\u0447\u043D\u043E\u043C \u043A\u0430\u0431\u0438\u043D\u0435\u0442\u0435 \u043F\u043E\u0441\u043B\u0435 \u043E\u0442\u043F\u0440\u0430\u0432\u043A\u0438 \u0437\u0430\u044F\u0432\u043A\u0438. "),L=E(" \u0411\u0443\u0434\u0435\u0442 \u043B\u0438 \u0435\u0449\u0435 \u0432\u043E\u0437\u043C\u043E\u0436\u043D\u043E\u0441\u0442\u044C \u0432\u044B\u0431\u0440\u0430\u0442\u044C \u043F\u0440\u043E\u0435\u043A\u0442 \u043F\u043E\u0441\u043B\u0435 \u043E\u043A\u043E\u043D\u0447\u0430\u043D\u0438\u044F \u0441\u0440\u043E\u043A\u0430 \u043F\u0440\u0438\u0435\u043C\u0430 \u0437\u0430\u044F\u0432\u043E\u043A? "),O=E(" \u0417\u0430 \u043D\u0435\u0441\u043A\u043E\u043B\u044C\u043A\u043E \u043D\u0435\u0434\u0435\u043B\u044C \u0434\u043E \u043D\u0430\u0447\u0430\u043B\u0430 \u0443\u0447\u0435\u0431\u043D\u043E\u0433\u043E \u0433\u043E\u0434\u0430 \u043E\u0442\u043A\u0440\u043E\u0435\u0442\u0441\u044F \u0432\u043E\u0437\u043C\u043E\u0436\u043D\u043E\u0441\u0442\u044C \u043F\u043E\u0434\u0430\u0442\u044C \u0437\u0430\u044F\u0432\u043A\u0443 \u0438\u043B\u0438 \u0438\u0437\u043C\u0435\u043D\u0438\u0442\u044C \u0441\u0432\u043E\u0439 \u0432\u044B\u0431\u043E\u0440. "),G=E(" \u042F \u043F\u0435\u0440\u0435\u0432\u0435\u043B\u0441\u044F \u0432 \u0434\u0440\u0443\u0433\u043E\u0439 \u0438\u043D\u0441\u0442\u0438\u0442\u0443\u0442 (\u0442\u043E \u0435\u0441\u0442\u044C \u0443\u0447\u0443\u0441\u044C \u0441\u0435\u0439\u0447\u0430\u0441 \u043D\u0435 \u043F\u043E \u0442\u043E\u043C\u0443 \u043F\u0440\u043E\u0444\u0438\u043B\u044E \u043E\u0431\u0443\u0447\u0435\u043D\u0438\u044F \u043D\u0430 \u043A\u043E\u0442\u043E\u0440\u044B\u0439 \u043F\u043E\u0441\u0442\u0443\u043F\u0430\u043B \u0432 \u0418\u0420\u041D\u0418\u0422\u0423 \u0438\u0437\u043D\u0430\u0447\u0430\u043B\u044C\u043D\u043E) \u0438 \u043D\u0435 \u0432\u0438\u0436\u0443 \u0441\u043F\u0438\u0441\u043A\u0438 \u043F\u0440\u043E\u0435\u043A\u0442\u043E\u0432 \u0441\u0432\u043E\u0435\u0433\u043E \u043D\u043E\u0432\u043E\u0433\u043E \u0438\u043D\u0441\u0442\u0438\u0442\u0443\u0442\u0430, \u0447\u0442\u043E \u043C\u043D\u0435 \u0434\u0435\u043B\u0430\u0442\u044C? "),H=E(" \u0412\u0430\u043C \u043D\u0435\u043E\u0431\u0445\u043E\u0434\u0438\u043C\u043E \u043F\u0440\u0438\u0432\u044F\u0437\u0430\u0442\u044C \u0432\u0430\u0448 \u0430\u043A\u043A\u0430\u0443\u043D\u0442 \u043D\u0430 \u041A\u0430\u043C\u043F\u0443\u0441\u0435 \u0418\u0420\u041D\u0418\u0422\u0423 \u043A \u043D\u043E\u0432\u043E\u043C\u0443 \u0438\u043D\u0441\u0442\u0438\u0442\u0443\u0442\u0443, \u0434\u043B\u044F \u044D\u0442\u043E\u0433\u043E \u043E\u0431\u0440\u0430\u0442\u0438\u0442\u0435\u0441\u044C \u0432 "),J=i(()=>C("a",{target:"_blank",href:"https://int.istu.edu/register/help/"}," \u0441\u043B\u0443\u0436\u0431\u0443 \u043F\u043E\u0434\u0434\u0435\u0440\u0436\u043A\u0438 \u041A\u0430\u043C\u043F\u0443\u0441\u0430 ",-1)),K=E(". "),M=n({setup(o){return(s,F)=>(D(),_(r,null,{default:u(()=>[$,t(e,null,{title:u(()=>[j]),content:u(()=>[y]),_:1}),t(e,null,{title:u(()=>[k]),content:u(()=>[I]),_:1}),t(e,null,{title:u(()=>[b]),content:u(()=>[q]),_:1}),t(e,null,{title:u(()=>[P]),content:u(()=>[S]),_:1}),t(e,null,{title:u(()=>[N]),content:u(()=>[V]),_:1}),t(e,null,{title:u(()=>[w]),content:u(()=>[Q]),_:1}),t(e,null,{title:u(()=>[T]),content:u(()=>[z]),_:1}),t(e,null,{title:u(()=>[L]),content:u(()=>[O]),_:1}),t(e,null,{title:u(()=>[G]),content:u(()=>[H,J,K]),_:1}),t(m)]),_:1}))}});var E4=A(M,[["__scopeId","data-v-0fec7a5c"]]);export{E4 as default};
